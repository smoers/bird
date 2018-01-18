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

function setup(options){

    /**
     * Défini date picker pour les champs étendus
     */
    $('input[type=hidden][id*="book_linkfieldsbooks"]').each(function(item){
        var type =  $('#book_linkfieldsbooks_'+item+'_type').val();
        if(type === 'date'){
            $('#book_linkfieldsbooks_'+item+'_field').datepicker({
                format: "dd/mm/yyyy",
                autoclose: true,
                language: options['language']
            });
        }
    });
    /**
     * Defini l'event dans le cas d'un chargement d'image
     */
    $('#book_image').on('change',function(){
        readURL(this);
    });

    /**
     * Permet d'agrandir l'image
     */
    $('#img_book').on('click', function() {
        $('.enlargeImageModalSource').attr('src', $('#thumb').attr('src'));
        $('#enlargeImageModal').modal('show');
    });

    $('#book_cycle_authors').select2();
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