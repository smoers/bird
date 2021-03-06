/*
Class Modal
Pour l'affichage de la fenêtre Modal
 */

/**
 * Class destinée à l'affichage de la fenetre modal avec les messages
 * Cette classe va de pair avec les tags <div id="modal_class"></div>
 */
class Modal{

    /**
     * Contructeur
     */
    constructor(){
        //Valeur par default
        $('#modal_class').append(this.modalCore);
        this._index = 0;
        this._button = new Array();
        this._glyphicon = '<span class="glyphicon glyphicon-question-sign">';
        this._title = '</span>';
        this._content = 'Message Content';
        this._maskFooter = '';
        this._footer = '<button type="button" class="btn btn-default" data-dismiss="modal" id="modalMessage_'+ this._index +'">Close</button>';
        this._modalSize = Modal.Size.NORMAL;
    }

    static get Size(){
        return {
            SMALL: 'modal-sm',
            NORMAL: '',
            LARGE: 'modal-lg'
        };
    }

    static get Alert(){
        return {
            SUCCESS: 'alert-success',
            INFO: 'alert-info',
            WARNING: 'alert-warning',
            DANGER: 'alert-danger'
        };
    }

    /**
     * Permet d'ajouter un titre à la suite du Glyphicon
     * @param value
     */
    addTitle(value){
        this._title = '  ' + value + '</span>';
    }

    /**
     * Permet d'ajouter le contenu du message
     * @param value
     */
    addContent(value){
        this._content = value;
    }

    /**
     * Permet d'ajouter un element avec ses tag HTML ex : un <select></select>
     * @param value
     */
    addHTMLElement(value){
        this._button.push(value);
    }

    /**
     * Permet d'ajouter un bouton dans le Footer
     * Un index est incrémenté a chaque ajout d'un bouton
     * L'ordre d'affichage correspond à l'ordre d'ajout des boutons.
     * @param value
     */
    addButton(value){
        this._button.push('<button type="button" class="btn btn-default" id="modalMessage_'+ this._index +'">' + value + '</button>');
        this._index++;
    }

    /**
     * Permet de définir un mask pour l'affichage des elements du footer.
     *
     * @param value
     */
    addMaskFooter(value){
        this._maskFooter = value;
    }

    /**
     * Défini le Glyphicon du titre
     * @param value
     */
    glyphicon(value){
        switch (value){
            case 'question': this._glyphicon = '<span class="glyphicon glyphicon-question-sign text-primary">'; break;
            case 'warning' : this._glyphicon = '<span class="glyphicon glyphicon-warning-sign text-warning">'; break;
            case 'info' : this._glyphicon = '<span class="glyphicon glyphicon-info-sign text-info">'; break;
            case 'ok' : this._glyphicon = '<span class="glyphicon glyphicon-ok-sign text-success">'; break;
        }
    }

    /**
     * retourne un tableau avec la definition des boutons
     * @returns {Array}
     */
    get button(){
        return this._button;
    }

    /**
     * Defini la taille de la fenetre modal
     * @param value
     */
    set size(value){
        this._modalSize = value;
        console.log(this._modalSize);
    }

    /**
     * Crée et affiche le contenu du Modal
     */
    show(){
        //Construire le footer
        var mask = '';
        if(this._maskFooter !== ''){
            mask = this._maskFooter;
            this._button.forEach(function(item, index, array){
                mask = mask.replace('%%'+index+'%%',item);
            });
            mask = mask.replace(/%%\d+%%/g, '');
        }
        else if(this._button.length !== 0){
            mask = '<div class="row col-md-12">';
            this._button.forEach(function(item, index, array) {
                mask = mask + item;
            },this);
            mask = mask + '</div>'
        }
        else{
            mask = '<div class="row col-md-12">' + this._footer + '</div>';
        }
        console.log(this._modalSize);
        $('.modal-dialog').addClass(this._modalSize);
        $('#modalMessages_title').html(this._glyphicon + this._title);
        $('#modalMessages_content').html(this._content);
        $('#modalMessages_footer').html(mask);
        $('#modalMessages').modal('show');
    }

    /**
     * Ferme la fenetre modal
     */
    close(){
        $('#modalMessages').modal('hide');
    }

    showAlert(message, type){
        var alert =   '<div class="alert '+ type +' alert-dismissable h6"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>'+ message +'</div>'
        $('#modalMessages_content').prepend(alert);
    }

    /**
     * Corps du Modal
     * @returns {string}
     */
    get modalCore(){
        return '<div class="modal fade" id="modalMessages" role="dialog" data-keyboard="false" data-backdrop="static">\n' +
            '\t<div class="modal-dialog">\n' +
            '\t\t<div class="modal-content">\n' +
            '\t\t\t<div class="modal-header">\n' +
            '\t\t\t\t<button type="button" class="close" data-dismiss="modal">&times;</button>\n' +
            '\t\t\t\t<h5 class="modal-title" id="modalMessages_title">Modal Header</h5>\n' +
            '\t\t\t</div>\n' +
            '\t\t\t<div class="modal-body">\n' +
            '\t\t\t\t<p id="modalMessages_content">This is a small modal.</p>\n' +
            '\t\t\t</div>\n' +
            '\t\t\t<div class="modal-footer" id="modalMessages_footer">\n' +
            '\t\t\t\t<button type="button" class="btn btn-default" data-dismiss="modal">{{ \'modal.messages.btn.close\'|trans }}</button>\n' +
            '\t\t\t</div>\n' +
            '\t\t</div>\n' +
            '\t</div>\n' +
            '</div>'
    }

}