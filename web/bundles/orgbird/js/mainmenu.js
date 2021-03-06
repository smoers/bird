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
            var modal  = new Modal();
            modal.addButton(language['modal.messages.btn.new']);
            modal.addButton(language['modal.messages.btn.no']);
            var btn_existing = '';
            //si des cyles existent, le bouton Yes et le Select sont créés
            if (cycles.length > 0) {
                modal.addButton(language['modal.messages.btn.yes']);
                btn_existing = '<div class="col-md-4"><select class="form-control" id="modalMessage_existing">';
                cycles.forEach(function (item, index) {
                    var selected = '';
                    if(item.id == parentid){
                        selected = 'selected'
                    }
                    btn_existing = btn_existing + '<option value="' + item.id + '" '+ selected +'>' + item.title + '</option>';
                });
                btn_existing = btn_existing + '</select></div>';
                modal.addHTMLElement(btn_existing);
            }
            //Defini les otpions avec la liste des Cycles
            modal.glyphicon('question');
            modal.addContent(language['modal.messages.add.book']);
            modal.addMaskFooter('<div class="row"><div class="col-md-4">%%0%%%%1%%%%2%%</div>%%3%%</div>');
            modal.size = Modal.Size.LARGE;
            modal.show();
            // réponse non pas dans un cycle
            $('#modalMessage_1').on('click', function () {
                $('#modalMessages').modal('hide');
                var id = $('#grid-authors').datagrid('getSelected').id;
                href = getURL(url['menu-book-add'], id)
                window.location.href = href;
            });
            //réponse nouveau cycle
            $('#modalMessage_0').on('click', function () {
                $('#modalMessages').modal('hide');
                var id = $('#grid-authors').datagrid('getSelected').id;
                href = getURL(url['menu-cycle-new-book-add'], id);
                window.location.href = href;
            });
            //Réponse cycle existant
            $('#modalMessage_2').on('click', function () {
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
            modal.addButton(language['modal.messages.btn.close']);
            modal.glyphicon('warning');
            modal.addTitle(language['modal.messages.title.warning']);
            modal.addContent(language['modal.messages.no.book']);
            modal.size = Modal.Size.LARGE;
            modal.show();
        }
    });

    /**
     * permet d'éditer un cycle
     */
    $('#menu_cycle_edit').on('click', function () {
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
            id = $('#grid-cycles').datagrid('getSelected').id;
        }

        if(children != ''){
            var href = getURL(url['menu-cycle-edit'],id);
            window.location.href = href;
        }
        else{
            var modal = new Modal();
            modal.addButton(language['modal.messages.btn.close']);
            modal.glyphicon('warning');
            modal.addTitle(language['modal.messages.title.warning']);
            modal.addContent(language['modal.messages.no.cycle']);
            modal.size = Modal.Size.LARGE;
            modal.show();
        }

    })

    /**
     * Changement de mot de passe
     */
    $('#menu_password_change').on('click', function () {
        var modal = new Modal();
        var content ='<div class="container-fluid"><div class="row"><div class="form-group"><label for="old" class="col-sm-4 control-label h6">'+ language['modal.change.password.old'] +'</label><div class="col-sm-8"><input type="password" class="form-control" id="old" placeholder="Password"></div></div></div>';
        content = content + '<div class="row"><div class="form-group"><label for="new" class="col-sm-4 control-label h6">'+ language['modal.change.password.new'] +'</label><div class="col-sm-8"><input type="password" class="form-control" id="new" placeholder="Password"></div></div></div>';
        content = content + '<div class="row"><div class="form-group"><label for="repeat" class="col-sm-4 control-label h6">'+ language['modal.change.password.repeat'] +'</label><div class="col-sm-8"><input type="password" class="form-control" id="repeat" placeholder="Password"></div></div></div></div>';
        modal.addContent(content);
        modal.glyphicon('question');
        modal.addTitle(language['modal.change.password.title']);
        modal.addButton(language['modal.change.password.save']);
        modal.addButton(language['modal.change.password.cancel']);
        modal.size = Modal.Size.SMALL;
        modal.show();

        $('#modalMessage_0').on('click', function () {
            var _old = $('#old').val();
            var _new =  $('#new').val();
            var _repeat = $('#repeat').val();
            if(_old == '') {
                modal.showAlert(language['modal.change.password.old.empty'], Modal.Alert.WARNING);
            }else if(_new == '' || _repeat == ''){
                modal.showAlert(language['modal.change.password.new.empty'], Modal.Alert.WARNING);
            }else if (_new != _repeat){
                modal.showAlert(language['modal.change.password.new.confirm'], Modal.Alert.WARNING);
            }else {
                $.when(
                    changePassword(url['bird-change-password'],_old,_new)
                ).then(function (result) {
                    if(result.return){
                        modal.showAlert(language['modal.change.password.new.success'],Modal.Alert.SUCCESS);
                        sleep(5000).then(() => {modal.close()});
                    }else {
                        modal.showAlert(language['modal.change.password.old.error'],Modal.Alert.WARNING);
                    };
                });

            }
            $('#old').val('');
            $('#new').val('');
            $('#repeat').val('');
        });

        $('#modalMessage_1').on('click', function () {
            modal.close();
        });
    })

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
 * Requete Ajax pour changer le mot de passe utilisateur
 * @param url
 * @param currentPassword
 * @param newPassword
 */
function changePassword(url, currentPassword, newPassword){
    var result = $.ajax({
        url: url,
        method: 'POST',
        data: { old: currentPassword, new: newPassword},
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

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
