/*
 * Copyright (c) 2017.  Bird Web
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Created by a49974 on 20/07/2017.
 */

function setupMainMenu(options){

    var language = options['language'];
    var url = options['url'];

    $('#menu_author_edit').on('click', function(){
        var id = $('#grid-authors').datagrid('getSelected').id;
        var href = url['menu-author-edit'].replace(/\/0(?!.*\/0)/,'/'+id);
        window.location.href = href;
    });

    /**
     * Lorsque l'utilisateur veut ajouter un livre
     * le système lui demande s'il s'agit d'un livre faisant partie d'un cycle
     * Ici on gère l'affichage du modal et la réponse
     */
    $('#menu_book_add').on('click', function(){
        //check le layout utilisé
        var layout_cirrus = document.getElementById('treegrid-cycles');
        //Récupérer les cycles existants pour cet auteur
        var authorid = $('#grid-authors').datagrid('getSelected').id;
        var children = '';
        var parent = '';
        var parentid = 0;
        /**
         * dans le cas du layout cirrus
         */
        if(layout_cirrus){
            selectedid = $('#treegrid-cycles').treegrid('getSelected').id;
            children = $('#treegrid-cycles').treegrid('getChildren', selectedid);
            parent = $('#treegrid-cycles').treegrid('getParent', selectedid)
            if(children == '' && parent != null ){
                parentid = $('#treegrid-cycles').treegrid('getParent', selectedid).id;
            }
            else if(children !== '' && parent === null){
                parentid = selectedid;
            }
        }
        //le 'when' permet d'attendre la réponse du server avant d'afficher la fenetre Modal
        //Et ce du fait que la requete AJAX est asynchrone
        $.when(
            getCycle(url['ajax'], authorid)
        )
        .then(function (cycles) {
            //Mise en forme des boutons du Footer
            var btn_new = '<button type="button" class="btn btn-default" data-dismiss="modal" id="modalMessage_new">' + language['modal.messages.btn.new'] + '</button>';
            var btn_no = '<button type="button" class="btn btn-default" data-dismiss="modal" id="modalMessage_no">' + language['modal.messages.btn.no'] + '</button>';
            var btn_yes = '';
            var btn_existing = '';
            //si des cyles existent, le bouton Yes et le Select sont créés
            if (cycles.length > 0) {
                btn_yes = '<button type="button" class="btn btn-default" data-dismiss="modal" id="modalMessage_yes">' + language['modal.messages.btn.yes'] + '</button>';
                btn_existing = '<div class="col-md-4"><select class="form-control" id="modalMessage_existing">';
                cycles.forEach(function (item, index) {
                    var selected = '';
                    if(item.id == parentid){
                        selected = 'selected'
                    }
                    btn_existing = btn_existing + '<option value="' + item.id + '" '+ selected +'>' + item.title + '</option>';
                });
                btn_existing = btn_existing + '</select></div>';
            }
            //Defini les otpions avec la liste des Cycles
            $('#modalMessages_title').html('<span class="glyphicon glyphicon-question-sign"></span>');
            $('#modalMessages_content').html(language['modal.messages.add.book']);
            $('#modalMessages_footer').html('<div class="row"><div class="col-md-4">' + btn_new + btn_no + btn_yes + "</div>" + btn_existing + '</div>');
            $('#modalMessages').modal('show');
            // réponse non pas dans un cycle
            $('#modalMessage_no').on('click', function () {
                $('#modalMessages').modal('hide');
                var id = $('#grid-authors').datagrid('getSelected').id;
                href = getURL(url['menu-book-add'], id)
                window.location.href = href;
            });
            //réponse nouveau cycle
            $('#modalMessage_new').on('click', function () {
                $('#modalMessages').modal('hide');
                var id = $('#grid-authors').datagrid('getSelected').id;
                href = getURL(url['menu-cycle-new-book-add'], id);
                window.location.href = href;
            });
            //Réponse cycle existant
            $('#modalMessage_yes').on('click', function () {
                $('#modalMessages').modal('hide');
                var id = $('#modalMessage_existing').val();
                href = getURL(url['menu-cycle-edit-book-add'], id);
                window.location.href = href;
            });
        });
    });

    /**
     * permet d'éditer un livre
     */
    $('#menu_book_edit').on('click',function () {
        //check le layout utilisé
        var layout_cirrus = document.getElementById('treegrid-cycles');
        //Récupérer les cycles existants pour cet auteur
        var id = 0;
        var children = '';
        if(layout_cirrus){
            id = $('#treegrid-cycles').treegrid('getSelected').id;
            children = $('#treegrid-cycles').treegrid('getChildren', id);
        }
        else {
            id = $('#grid-books').datagrid('getSelected').id;
        }
        //Si pas layout cirrus, pas de children on edite
        //Si layout cirrus et pas de children alors un livre on edite
        //Si layout cirrus et children alors pas un livre mais un cycle on ne fait rien
        if(children == '') {
            var href = url['menu-book-edit'].replace(/\/0(?!.*\/0)/, '/' + id);
            window.location.href = href;
        }
        else{
            var modal = new Modal();
            modal.addButton('Cancel');
            modal.show();
        }
    });

}

/**
 * Remplace l'id du template /0 par le bonne ID
 */
function getURL(URLTemplate, id) {

    return URLTemplate.replace(/\/0(?!.*\/0)/,'/'+id);

}

/**
 * Retourne la liste des cycles suite à une requete AJAX
 * @param url
 * @returns {*}
 */
function getCycle(url, authorid){
    var result =  $.ajax({
        url: url,
        method: 'POST',
        data: { ajaxid: 'get_cycle', authorid: authorid},
        success: function(data){
            result = data;
        },
        error: function(jqXHR, textStatus, errorThrown){
            console.log(textStatus+' := '+errorThrown);
        },
        complete: function(response, status, xhr) {
            console.log(status);
        }
    });

    return result;
}

/**
 * Class destinée à l'affichage de la fenetre modal avec les messages
 */
class Modal{

    constructor(){
        //Valeur par default
        this._index = 0;
        this._button = new Array();
        this._title = '<span class="glyphicon glyphicon-question-sign"></span>';
        this._content = 'Message Content';
        this._maskFooter = '';
        this._footer = '<button type="button" class="btn btn-default" data-dismiss="modal" id="modalMessage_'+ this._index +'">Close</button>';
    }

    addTitle(value){
        this._title = value;
    }

    addContent(value){
        this._content = value;
    }

    addHTMLElement(value){
        this._button = value;
    }

    addButton(value){
        this._button.push('<button type="button" class="btn btn-default" data-dismiss="modal" id="modalMessage_'+ this._index +'">' + value + '</button>');
        this._index++;
    }

    addMaskFooter(value){
        this._maskFooter = value;
    }

    get button(){
        return this._button;
    }

    show(){
        //Construire le footer
        var mask = '';
        if(this._maskFooter !== ''){
            mask = this._maskFooter;
            this._button.forEach(function(item, index, array){
                mask.replace('%%'+index+'%%',item);
            });
        }
        else{
            mask = '<div class="row"><div class="col-md-'+ this._button.length +' text-right">';
            this._button.forEach(function(item, index, array){
               mask = mask + item;
            });
            mask = mask + '</div></div>'
        }
        $('#modalMessages_title').html(this._title);
        $('#modalMessages_content').html(this._content);
        $('#modalMessages_footer').html(mask);
        $('#modalMessages').modal('show');
    }

}