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
        $('#modalMessages_title').html('<span class="glyphicon glyphicon-question-sign"></span>');
        $('#modalMessages_content').html(language['modal.messages.add.book']);
        $('#modalMessages_footer').html('<button type="button" class="btn btn-default" data-dismiss="modal" id="modalMessage_yes">'+language['modal.messages.btn.yes']+'</button>' +
            '<button type="button" class="btn btn-default" data-dismiss="modal" id="modalMessage_no">'+language['modal.messages.btn.no']+'</button>');
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