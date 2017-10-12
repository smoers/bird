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