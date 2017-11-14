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
        //Récupérer les cycles existants pour cet auteur
        var authorid = $('#grid-authors').datagrid('getSelected').id
        //le 'when' permet d'attendre la réponse du server avant d'afficher la fenetre Modal
        //Et ce du fait que la requete AJAX est asynchrone
        $.when(
            getCycle(url['ajax'], authorid)
        )
            .then(function(cycles){
                //Mise en forme des boutons du Footer
                var btn_new = '<button type="button" class="btn btn-default" data-dismiss="modal" id="modalMessage_new">'+language['modal.messages.btn.new']+'</button>';
                var btn_no = '<button type="button" class="btn btn-default" data-dismiss="modal" id="modalMessage_no">'+language['modal.messages.btn.no']+'</button>';
                var btn_yes = '';
                var btn_existing = '';
                //si des cyvles existent, le bouton Yes et le Select sont créés
                if(cycles.length > 0) {
                    btn_yes = '<button type="button" class="btn btn-default" data-dismiss="modal" id="modalMessage_yes">'+language['modal.messages.btn.yes']+'</button>';
                    btn_existing = '<div class="col-md-4"><select class="form-control" id="modalMessage_existing">';
                    cycles.forEach(function (item, index) {
                        btn_existing = btn_existing + '<option value="' + item.id + '">' + item.title + '</option>';
                    });
                    btn_existing = btn_existing + '</select></div>';
                }
                //Defini les otpions avec la liste des Cycles
                $('#modalMessages_title').html('<span class="glyphicon glyphicon-question-sign"></span>');
                $('#modalMessages_content').html(language['modal.messages.add.book']);
                $('#modalMessages_footer').html( '<div class="row"><div class="col-md-4">'+btn_new + btn_no + btn_yes + "</div>" + btn_existing+'</div>');
                $('#modalMessages').modal('show');
                $('#modalMessage_yes').on('click',function(){
                    $('#modalMessages').modal('hide');
                    window.location.href = url[''];
                });
                // réponse non pas dans un cycle
                $('#modalMessage_no').on('click',function(){
                    $('#modalMessages').modal('hide');
                    var id = $('#grid-authors').datagrid('getSelected').id;
                    href = getURL(url['menu-book-add'],id)
                    window.location.href = href;
                });
                //réponse nouveau cycle
                $('#modalMessage_new').on('click',function(){
                    $('#modalMessages').modal('hide');
                    var id = $('#grid-authors').datagrid('getSelected').id;
                    href = getURL(url['menu-cycle-book-add'],id);
                    windows.location.href = href;
                });
            });
    });

    $('#menu_book_edit').on('click',function () {
       var id = $('#grid-books').datagrid('getSelected').id;
       var href = url['menu-book-edit'].replace(/\/0(?!.*\/0)/,'/'+id);
       window.location.href = href;
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