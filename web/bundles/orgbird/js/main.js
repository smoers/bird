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
 * Bird Web
 * Main Javascript
 * Moers Serge
 */

//init constants d'ajustement du layout
const main_layout_west_panel_width = 400;
const datagrid_authors_default_columns_width = 130;
const datagrid_authors_correction_width = 60;
const datagrid_authors_correction_height = 53;
const cycle_layout_south_panel_height = 300;
const cycle_layout_correction_height = 40;
const cycle_layout_correction_width = 40;
const datagrid_cycles_books_correction_width = 40;
const datagrid_cycles_books_correction_height = 83;
//Alphabetique layout
const alphabet_linkbutton = ['All','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
const alphabet_row = '<tr><td><a href="#" id="alph-%%" class="easyui-linkbutton">%%</a></td></tr>';
const alphabet_linkbutton_height = 18;

/**
 * Cette fonction est en charge de la configuration
 * @param options
 */
function setup(options){

	var language = options['language'];
	var url = options['url'];
	var selectedAuthor = options['selectedAuthor'];
	var layout_cirrus = document.getElementById('treegrid-cycles');

    //Init la liste alphabétique du panneau West
    alphabet_linkbutton.forEach(function (value, index) {
        if(value === 'All'){
            value = language['main.author.alph.all'];
        }
        var html = alphabet_row.replace(/%%/g, value);
        $('#alph').append(html);
        $('#alph-' + value).linkbutton({
            toggle:true,
            group: "group1",
            plain:true,
            height: alphabet_linkbutton_height,
            onClick: function () {
                $('#grid-authors').datagrid('load',{letter: value, type: 'alph'});
            }
        });
    });

    //grid-authors definition
    $('#grid-authors').datagrid({

        singleSelect: true,
        loadMsg: language['main.author.loading.msg'],
        idField: 'id',
        columns:[[
            {field:'lastname', title: language['main.author.lastname'], align: 'left', sortable: true, resizable: true, width: datagrid_authors_default_columns_width },
            {field:'firstname', title: language['main.author.firstname'], align: 'left', sortable: true, resizable: true, width: datagrid_authors_default_columns_width },
        ]],

    });

    //grid-cycles definition
    $('#grid-cycles').datagrid({
        url: url['grid-cycles'],
        singleSelect: true,
        loadMsg: language['main.author.loading.msg'],
        idField: 'id',
        columns:[[
            {field:'title', title: language['main.cycle.title'], align: 'left', sortable: true, resizable: true, width: datagrid_authors_default_columns_width },
            {field:'yncycle', title: language['main.cycle.yncycle'], align: 'left', sortable: true, resizable: true, width: datagrid_authors_default_columns_width },
            {field:'nbrvolume', title: language['main.cycle.nbrvolume'], align: 'left', sortable: true, resizable: true, width: datagrid_authors_default_columns_width },
        ]],
    });

    //grid-books definition
    $('#grid-books').datagrid({
        url: url['grid-books'],
        singleSelect: true,
        idField: 'id',
        loadMsg: language['main.author.loading.msg'],
        columns:[[
            {field:'title', title: language['main.book.title'], align: 'left', sortable: true, resizable: true, width: datagrid_authors_default_columns_width },
            {field:'volume', title: language['main.book.volume'], align: 'left', sortable: true, resizable: true, width: datagrid_authors_default_columns_width },
            {field:'format', title: language['main.book.format'], align: 'left', sortable: true, resizable: true, width: datagrid_authors_default_columns_width },
            {field:'editor', title: language['main.book.editor'], align: 'left', sortable: true, resizable: true, width: datagrid_authors_default_columns_width },
            {field:'collection', title: language['main.book.collection'], align: 'left', sortable: true, resizable: true, width: datagrid_authors_default_columns_width },
        ]],
    });

	//Adapte la hauteur du composant Layout lors du chargement de la page
	$('#main-layout').layout('resize',{
		height: $(document).height()*0.70,
	});

	//defini l'event pour adapte la longeur & largeur du datagrid en fonction
    //de la longeur & largeur du layout panel west
    //doit rester avant la definition de la largeur par defaut du composant Layout
    var panel = $('#main-layout').layout('panel','west');
    panel.panel({
        onResize: function(width, height){
            $('#grid-authors').datagrid('resize',{
                width: width-datagrid_authors_correction_width,
                height: height-datagrid_authors_correction_height
            });
        }
    });
    /* defini l'event pour adapter la hauteur et la largeur du composant layout cycle compris dans
     * le panneau 'center' du composant layout main
    */
    var panel_center = $('#main-layout').layout('panel','center');
    panel_center.panel({
        onResize: function (width, height) {
            $('#cycle-layout').layout('resize',{
                height: height - cycle_layout_correction_height,
                width: width - cycle_layout_correction_width
            });
        }
    });

    //defini la largeur par defaut du panneau 'west' du composant Layout
    panel.panel('resize',{
        width: main_layout_west_panel_width,
    });

    /* defini l'event pour adapter la hauteur et la largeur du composant datagrid Cycle compris dans
     * le panneau 'center' du composant layout cycle-layout
     */
    var panel_cycles = $('#cycle-layout').layout('panel','center');
    panel_cycles.panel({
        onResize: function (width, height) {
            $('#grid-cycles').datagrid('resize',{
                width: width-datagrid_cycles_books_correction_width,
                height: height-datagrid_cycles_books_correction_height
            });
        }
    });

    /* defini l'event pour adapter la hauteur et la largeur du composant datagrid books compris dans
     * le panneau 'south' du composant layout cycle-layout
     */
    var panel_books = $('#cycle-layout').layout('panel','south');
    panel_books.panel({
        onResize: function (width, height) {
            $('#grid-books').datagrid('resize',{
                width: width-datagrid_cycles_books_correction_width,
                height: height-datagrid_cycles_books_correction_height,
            });
        }

    });
    //defini la hauteur par defaut du panneau 'south' du composant cycle-layout
    panel_books.panel('resize',{
        height: cycle_layout_south_panel_height,
    });

    //redessine le composant layout après changement dela largeur par defaut
    $('#main-layout').layout('resize');
    $('#cycle-layout').layout('resize');

    /*
     * Code applicatif
     */

    $('#grid-authors').datagrid({
        url: url['grid-authors'],
        onSelect:function(index, row){
            if(row){
                $('#grid-cycles').datagrid('load',{id_author: row.id});
                if(layout_cirrus){
                    $('#treegrid-cycles').treegrid('load',{ajaxid: 'get_layout_cirrus', authorid: row.id});
                }
            };
        },
        onLoadSuccess:function(data) {
            //cette event permet de selectionner le premiere auteur, s'il existe
            if(data.total != 0){
                $('#grid-authors').datagrid('selectRow',selectedAuthor);
            }
            else{
                //Vide le datagrid des cycle dans le cas ou il n'y a pas d'auteurs pour le filtre
                $('#grid-cycles').datagrid('loadData',{'rows': []});
            };
        }
    });

    $('#grid-cycles').datagrid({
        onSelect:function (index, row) {
            if(row){
                $('#grid-books').datagrid('load',{id_cycle: row.id});
            }
        },
        onLoadSuccess:function (data) {
            //cette event permet de selectionner le premiere cycle, s'il existe
            if(data.total != 0){
                $('#grid-cycles').datagrid('selectRow',0);
            }
            else{
                //Vide le datagrid des livres dans le cas ou il n'y a pas de cycle pour le filtre
                $('#grid-books').datagrid('loadData',{'rows': []});
            };

        },
    })

    $('#grid-books').datagrid({
        onLoadSuccess:function(data){
            //cette event permet de selectionner le premiere cycle, s'il existe
            if(data.total != 0){
                $('#grid-books').datagrid('selectRow',0);
            }
        }
    });


    if(layout_cirrus){
        $('#treegrid-cycles').treegrid({
            url: url['ajax'],
            idField: 'id',
            treeField: 'Title',
            columns:[[
                {field:'Title',title:language['main.book.title']},
                {field:'Volume',title:language['main.cycle.nbrvolume']+'/'+language['main.book.volume']},
                {field:'Format',title:language['main.book.format']},
                {field:'Editor',title:language['main.book.editor']},
                {field:'Collection',title:language['main.book.collection']},
                {field:'Cycle',title:'cycle'}
            ]],
            onSelect: function () {
            },
            onLoadSuccess: function(row, data){
                if(data.total != 0) {
                    $('#treegrid-cycles').treegrid('select', data[0].id);
                }
            }
        });


    }

}
