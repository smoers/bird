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
 * Created by a49974 on 8/06/2017.
 */

function setup(options){

    var url = options['url'];
    /**
     * Définie le date picker
     */
    $('#author_borndate').datepicker({
        format: "dd/mm/yyyy",
        autoclose: true,
        language: options['language']
    });

    /**
     * Définie le date picker
     */
    $('#author_deathdate').datepicker({
        format: "dd/mm/yyyy",
        autoclose: true,
        language: options['language']
    });

    /**
     * Défini date picker pour les champs étendus
     */
    $('input[type=hidden][id*="author_linkfieldsauthors"]').each(function(item){
       var type =  $('#author_linkfieldsauthors_'+item+'_type').val();
       if(type === 'date'){
           $('#author_linkfieldsauthors_'+item+'_field').datepicker({
               format: "dd/mm/yyyy",
               autoclose: true,
               language: options['language']
           });
       }
    });
    /**
     * Defini l'event dans le cas d'un chargement d'image
     */
    $('#author_image').on('change',function(){
        readURL(this);
    });

    /**
     * Permet d'agrandir l'image
     */
    $('#img_author').on('click', function() {
        $('.enlargeImageModalSource').attr('src', $('#thumb').attr('src'));
        $('#enlargeImageModal').modal('show');
    });

    /**
     * Gère les events sur le nom
     */
    $('#author_lastname').on('change', function(){
        checkAuthorExist(url['exist_author'],$('#author_firstname').val(),$('#author_lastname').val());
    });

    /**
     * Gère les events sur le prenom
     */
    $('#author_firstname').on('change', function () {
        checkAuthorExist(url['exist_author'],$('#author_firstname').val(),$('#author_lastname').val());
    })
}

/**
 * Permet de faire un preview lorsque l'on upload une photo
 * @param input
 */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#thumb').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
};

/**
 * Détermine si un auteur existe avec le même nom et prénom
 * @param url
 * @param firstname
 * @param lastname
 */
function checkAuthorExist(url, firstname, lastname){
    $.ajax({
        url: url,
        method: 'POST',
        data: { ajaxid: 'exist_author', firstname: firstname, lastname: lastname},
        success: function(data){
            if(data.isExist) {
                //Modal
                $('#modalMessages_title').html('<span class="glyphicon glyphicon-warning-sign"></span>   ' + data.title);
                $('#modalMessages_content').html(data.message);
                $('#modalMessages').modal('show');
            }
        }
    });

}