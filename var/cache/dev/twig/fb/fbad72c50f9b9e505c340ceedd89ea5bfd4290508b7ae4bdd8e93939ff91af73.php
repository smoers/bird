<?php

/* ORGBirdBundle:Main:Main.html.twig */
class __TwigTemplate_42b812f8d933e63d316c2fdc4a1873e91f0dcf86aadbe88a2b169472f28cef03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ORGBirdBundle::layout.html.twig", "ORGBirdBundle:Main:Main.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'bird_body' => array($this, 'block_bird_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ORGBirdBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_843cda82347940274f498cf631c946aaa9c9eb13c224be66a1d9720b13d60426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_843cda82347940274f498cf631c946aaa9c9eb13c224be66a1d9720b13d60426->enter($__internal_843cda82347940274f498cf631c946aaa9c9eb13c224be66a1d9720b13d60426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ORGBirdBundle:Main:Main.html.twig"));

        $__internal_0d77236706cd2f456a87bec0f619d3ba48c6129b6cae25e891aed8d2ea90335a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d77236706cd2f456a87bec0f619d3ba48c6129b6cae25e891aed8d2ea90335a->enter($__internal_0d77236706cd2f456a87bec0f619d3ba48c6129b6cae25e891aed8d2ea90335a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ORGBirdBundle:Main:Main.html.twig"));

        // line 4
        if ( !array_key_exists("selected", $context)) {
            // line 5
            $context["selected"] = 0;
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_843cda82347940274f498cf631c946aaa9c9eb13c224be66a1d9720b13d60426->leave($__internal_843cda82347940274f498cf631c946aaa9c9eb13c224be66a1d9720b13d60426_prof);

        
        $__internal_0d77236706cd2f456a87bec0f619d3ba48c6129b6cae25e891aed8d2ea90335a->leave($__internal_0d77236706cd2f456a87bec0f619d3ba48c6129b6cae25e891aed8d2ea90335a_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f9763e932f8e3a4383b2fe832a6c4b0a8ba7b76913cb2e45d64b050b8dc5b76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9763e932f8e3a4383b2fe832a6c4b0a8ba7b76913cb2e45d64b050b8dc5b76b->enter($__internal_f9763e932f8e3a4383b2fe832a6c4b0a8ba7b76913cb2e45d64b050b8dc5b76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5e4c752e2a97efa84c4c4ef9d288ec6e855c2e6f5ffd5fa073f11dee7e2b617c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4c752e2a97efa84c4c4ef9d288ec6e855c2e6f5ffd5fa073f11dee7e2b617c->enter($__internal_5e4c752e2a97efa84c4c4ef9d288ec6e855c2e6f5ffd5fa073f11dee7e2b617c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 8
        echo "\t";
        $this->loadTemplate("ORGBirdBundle:Menu:mainmenu.html.twig", "ORGBirdBundle:Main:Main.html.twig", 8)->display($context);
        
        $__internal_5e4c752e2a97efa84c4c4ef9d288ec6e855c2e6f5ffd5fa073f11dee7e2b617c->leave($__internal_5e4c752e2a97efa84c4c4ef9d288ec6e855c2e6f5ffd5fa073f11dee7e2b617c_prof);

        
        $__internal_f9763e932f8e3a4383b2fe832a6c4b0a8ba7b76913cb2e45d64b050b8dc5b76b->leave($__internal_f9763e932f8e3a4383b2fe832a6c4b0a8ba7b76913cb2e45d64b050b8dc5b76b_prof);

    }

    // line 11
    public function block_bird_body($context, array $blocks = array())
    {
        $__internal_ad8c3a5aaa6239ddb3d8dcf839e519328e5a27d2c5c8686ff73973d2d28a1e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8c3a5aaa6239ddb3d8dcf839e519328e5a27d2c5c8686ff73973d2d28a1e69->enter($__internal_ad8c3a5aaa6239ddb3d8dcf839e519328e5a27d2c5c8686ff73973d2d28a1e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bird_body"));

        $__internal_691ddf3913df7c75c4c4cfc6f8f418b8ef0dec547b6b542e29d08e6f5d9988e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691ddf3913df7c75c4c4cfc6f8f418b8ef0dec547b6b542e29d08e6f5d9988e6->enter($__internal_691ddf3913df7c75c4c4cfc6f8f418b8ef0dec547b6b542e29d08e6f5d9988e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bird_body"));

        // line 12
        echo "
\t<div class=\"easyui-layout\" id=\"main-layout\" style=\"width: 100%; height: 400px\">
\t\t<!-- panel auteurs -->
\t\t<div data-options=\"region: 'west',
\t\t\t\t\t\ttitle: '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.author.title", array(), "ORGBirdBundle"), "html", null, true);
        echo "',
\t\t\t\t\t\tsplit: true,
\t\t\t\t\t\tminWidth: 200,
\t\t\t\t\t\twidth: 200\"
\t\t style=\"padding: 0px\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"vertical-align: top\">
\t\t\t\t\t\t<div class=\"easyui-panel\" data-options=\"title: 'Alph'\">
\t\t\t\t\t\t\t<table id=\"alph\">
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<!-- grid auteurs -->
\t\t\t\t\t\t<div class=\"easyui-datagrid\" id=\"grid-authors\" style=\"padding: 0px\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t </div>
\t\t<div data-options=\"region: 'center',
\t\t\t\t\t   split: true,
\t\t\t\t\t   hideCollapsedContent: false,\">
\t\t\t<div class=\"easyui-layout\" id=\"cycle-layout\" style=\"width: 100%; height: 100%\">
\t\t\t\t";
        // line 40
        if ( !array_key_exists("layout", $context)) {
            // line 41
            echo "\t\t\t\t\t";
            $context["layout"] = "cirrus";
            // line 42
            echo "\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t";
        if (((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new Twig_Error_Runtime('Variable "layout" does not exist.', 43, $this->getSourceContext()); })()) == "startocumulus")) {
            // line 44
            echo "\t\t\t\t\t<!-- panel cycles -->
\t\t\t\t\t<div data-options=\"region: 'center',
\t\t\t\t\t\t\t\t   title: '";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.cycle.title.layout", array(), "ORGBirdBundle"), "html", null, true);
            echo "',
\t\t\t\t\t\t\t\t   split: true,
\t\t\t\t\t\t\t\t   hideCollapsedContent: false,\">
\t\t\t\t\t\t<!-- grid cycles -->
\t\t\t\t\t\t<div class=\"easyui-datagrid\" id=\"grid-cycles\" style=\"padding: 0px\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- panel livres -->
\t\t\t\t\t<div data-options=\"region: 'south',
\t\t\t\t\t\t\t\t   title: '";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.book.title.layout", array(), "ORGBirdBundle"), "html", null, true);
            echo "',
\t\t\t\t\t\t\t\t\tsplit: true,
\t\t\t\t\t\t\t\t\thideCollapsedContent: false,\">
\t\t\t\t\t\t<!-- grid livres -->
\t\t\t\t\t\t<div class=\"easyui-datagrid\" id=\"grid-books\" style=\"padding: 0px\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
        } elseif ((        // line 60
(isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new Twig_Error_Runtime('Variable "layout" does not exist.', 60, $this->getSourceContext()); })()) == "cirrus")) {
            // line 61
            echo "\t\t\t\t\t<!-- panel cycles -->
\t\t\t\t\t<div data-options=\"region: 'center',
\t\t\t\t\t\t\t\t   title: '";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.cycle.title.layout", array(), "ORGBirdBundle"), "html", null, true);
            echo "',
\t\t\t\t\t\t\t\t   split: true,
\t\t\t\t\t\t\t\t   hideCollapsedContent: false,\">
\t\t\t\t\t\t<!-- grid cycles -->
\t\t\t\t\t\t<table class=\"easyui-treegrid\" id=\"treegrid-cycles\" style=\"padding: 0px\"></table>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 70
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<script type=\"text/javascript\">

\t\$(document).ready(function(){
\t\tvar options = {};
\t\t//Tableau avec la traduction des titres
\t\tvar language = {};
\t\tlanguage['main.author.lastname'] = '";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.author.lastname", array(), "ORGBirdBundle"), "html", null, true);
        echo "';
\t\tlanguage['main.author.firstname'] = '";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.author.firstname", array(), "ORGBirdBundle"), "html", null, true);
        echo "';
\t\tlanguage['main.author.bornlastname'] = '";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.author.bornlastname", array(), "ORGBirdBundle"), "html", null, true);
        echo "';
\t\tlanguage['main.author.bornfirstname'] = '";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.author.bornfirstname", array(), "ORGBirdBundle"), "html", null, true);
        echo "';
\t\tlanguage['main.author.comment'] = '";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.author.comment", array(), "ORGBirdBundle"), "html", null, true);
        echo "';
\t\tlanguage['main.author.creationdate'] = '";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.author.creationdate", array(), "ORGBirdBundle"), "html", null, true);
        echo "';
\t\tlanguage['main.author.loading.msg'] = '";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.author.loading.msg", array(), "ORGBirdBundle"), "html", null, true);
        echo "';
\t\tlanguage['main.author.alph.all'] = '";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.author.alph.all", array(), "ORGBirdBundle"), "html", null, true);
        echo "';

\t\tlanguage['main.cycle.title'] = '";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.cycle.title", array(), "ORGBirdBundle"), "html", null, true);
        echo "';
\t\tlanguage['main.cycle.yncycle'] = '";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.cycle.yncycle", array(), "ORGBirdBundle"), "html", null, true);
        echo "';
\t\tlanguage['main.cycle.nbrvolume'] = '";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.cycle.nbrvolume", array(), "ORGBirdBundle"), "html", null, true);
        echo "';

\t\tlanguage['main.book.title'] = '";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.book.title", array(), "ORGBirdBundle"), "html", null, true);
        echo "';
\t\tlanguage['main.book.volume'] = '";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.book.volume", array(), "ORGBirdBundle"), "html", null, true);
        echo "';
\t\tlanguage['main.book.format'] = '";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.book.format", array(), "ORGBirdBundle"), "html", null, true);
        echo "';
\t\tlanguage['main.book.editor'] = '";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.book.editor", array(), "ORGBirdBundle"), "html", null, true);
        echo "';
\t\tlanguage['main.book.collection'] = '";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.book.collection", array(), "ORGBirdBundle"), "html", null, true);
        echo "';
\t\t//Tableau avec les URL's
\t\tvar url = {};
\t\turl['grid-authors'] = '";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bird_dashboard_ajax_authors");
        echo "';
\t\turl['grid-cycles'] = '";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bird_dashboard_ajax_cycles");
        echo "';
\t\turl['grid-books'] = '";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bird_dashboard_ajax_books");
        echo "';
\t\turl['ajax'] = '";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bird_ajax");
        echo "';

\t\toptions['language'] = language;
\t\toptions['url'] = url;
\t\toptions['selectedAuthor'] = ";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new Twig_Error_Runtime('Variable "selected" does not exist.', 106, $this->getSourceContext()); })()), "html", null, true);
        echo ";
\t\tsetup(options);
\t});

\t</script>
\t";
        // line 111
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0219d5b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0219d5b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/0219d5b_main_1.js");
            // line 112
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 112, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t";
        } else {
            // asset "0219d5b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0219d5b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/0219d5b.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 112, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        unset($context["asset_url"]);
        
        $__internal_691ddf3913df7c75c4c4cfc6f8f418b8ef0dec547b6b542e29d08e6f5d9988e6->leave($__internal_691ddf3913df7c75c4c4cfc6f8f418b8ef0dec547b6b542e29d08e6f5d9988e6_prof);

        
        $__internal_ad8c3a5aaa6239ddb3d8dcf839e519328e5a27d2c5c8686ff73973d2d28a1e69->leave($__internal_ad8c3a5aaa6239ddb3d8dcf839e519328e5a27d2c5c8686ff73973d2d28a1e69_prof);

    }

    public function getTemplateName()
    {
        return "ORGBirdBundle:Main:Main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 112,  266 => 111,  258 => 106,  251 => 102,  247 => 101,  243 => 100,  239 => 99,  233 => 96,  229 => 95,  225 => 94,  221 => 93,  217 => 92,  212 => 90,  208 => 89,  204 => 88,  199 => 86,  195 => 85,  191 => 84,  187 => 83,  183 => 82,  179 => 81,  175 => 80,  171 => 79,  160 => 70,  150 => 63,  146 => 61,  144 => 60,  135 => 54,  124 => 46,  120 => 44,  117 => 43,  114 => 42,  111 => 41,  109 => 40,  82 => 16,  76 => 12,  67 => 11,  56 => 8,  47 => 7,  37 => 1,  34 => 5,  32 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"ORGBirdBundle::layout.html.twig\" %}
{% trans_default_domain \"ORGBirdBundle\" %}
{#La variable selected est utilisée pour sélectionner un auteur lors du chargement de la page#}
{% if selected is not defined %}
\t{% set selected = 0 %}
{% endif %}
{% block menu %}
\t{% include 'ORGBirdBundle:Menu:mainmenu.html.twig' %}
{% endblock %}

{% block bird_body %}

\t<div class=\"easyui-layout\" id=\"main-layout\" style=\"width: 100%; height: 400px\">
\t\t<!-- panel auteurs -->
\t\t<div data-options=\"region: 'west',
\t\t\t\t\t\ttitle: '{{ 'main.author.title'|trans }}',
\t\t\t\t\t\tsplit: true,
\t\t\t\t\t\tminWidth: 200,
\t\t\t\t\t\twidth: 200\"
\t\t style=\"padding: 0px\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"vertical-align: top\">
\t\t\t\t\t\t<div class=\"easyui-panel\" data-options=\"title: 'Alph'\">
\t\t\t\t\t\t\t<table id=\"alph\">
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<!-- grid auteurs -->
\t\t\t\t\t\t<div class=\"easyui-datagrid\" id=\"grid-authors\" style=\"padding: 0px\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t </div>
\t\t<div data-options=\"region: 'center',
\t\t\t\t\t   split: true,
\t\t\t\t\t   hideCollapsedContent: false,\">
\t\t\t<div class=\"easyui-layout\" id=\"cycle-layout\" style=\"width: 100%; height: 100%\">
\t\t\t\t{% if layout is not defined %}
\t\t\t\t\t{% set layout = 'cirrus' %}
\t\t\t\t{% endif %}
\t\t\t\t{% if layout == 'startocumulus' %}
\t\t\t\t\t<!-- panel cycles -->
\t\t\t\t\t<div data-options=\"region: 'center',
\t\t\t\t\t\t\t\t   title: '{{ 'main.cycle.title.layout'|trans }}',
\t\t\t\t\t\t\t\t   split: true,
\t\t\t\t\t\t\t\t   hideCollapsedContent: false,\">
\t\t\t\t\t\t<!-- grid cycles -->
\t\t\t\t\t\t<div class=\"easyui-datagrid\" id=\"grid-cycles\" style=\"padding: 0px\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- panel livres -->
\t\t\t\t\t<div data-options=\"region: 'south',
\t\t\t\t\t\t\t\t   title: '{{ 'main.book.title.layout'|trans }}',
\t\t\t\t\t\t\t\t\tsplit: true,
\t\t\t\t\t\t\t\t\thideCollapsedContent: false,\">
\t\t\t\t\t\t<!-- grid livres -->
\t\t\t\t\t\t<div class=\"easyui-datagrid\" id=\"grid-books\" style=\"padding: 0px\"></div>
\t\t\t\t\t</div>
\t\t\t\t{% elseif layout == 'cirrus' %}
\t\t\t\t\t<!-- panel cycles -->
\t\t\t\t\t<div data-options=\"region: 'center',
\t\t\t\t\t\t\t\t   title: '{{ 'main.cycle.title.layout'|trans }}',
\t\t\t\t\t\t\t\t   split: true,
\t\t\t\t\t\t\t\t   hideCollapsedContent: false,\">
\t\t\t\t\t\t<!-- grid cycles -->
\t\t\t\t\t\t<table class=\"easyui-treegrid\" id=\"treegrid-cycles\" style=\"padding: 0px\"></table>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
\t<script type=\"text/javascript\">

\t\$(document).ready(function(){
\t\tvar options = {};
\t\t//Tableau avec la traduction des titres
\t\tvar language = {};
\t\tlanguage['main.author.lastname'] = '{{ 'main.author.lastname'|trans }}';
\t\tlanguage['main.author.firstname'] = '{{ 'main.author.firstname'|trans }}';
\t\tlanguage['main.author.bornlastname'] = '{{ 'main.author.bornlastname'|trans }}';
\t\tlanguage['main.author.bornfirstname'] = '{{ 'main.author.bornfirstname'|trans }}';
\t\tlanguage['main.author.comment'] = '{{ 'main.author.comment'|trans }}';
\t\tlanguage['main.author.creationdate'] = '{{ 'main.author.creationdate'|trans }}';
\t\tlanguage['main.author.loading.msg'] = '{{ 'main.author.loading.msg'|trans }}';
\t\tlanguage['main.author.alph.all'] = '{{ 'main.author.alph.all'|trans }}';

\t\tlanguage['main.cycle.title'] = '{{ 'main.cycle.title'|trans }}';
\t\tlanguage['main.cycle.yncycle'] = '{{ 'main.cycle.yncycle'|trans }}';
\t\tlanguage['main.cycle.nbrvolume'] = '{{ 'main.cycle.nbrvolume'|trans }}';

\t\tlanguage['main.book.title'] = '{{ 'main.book.title'|trans }}';
\t\tlanguage['main.book.volume'] = '{{ 'main.book.volume'|trans }}';
\t\tlanguage['main.book.format'] = '{{ 'main.book.format'|trans }}';
\t\tlanguage['main.book.editor'] = '{{ 'main.book.editor'|trans }}';
\t\tlanguage['main.book.collection'] = '{{ 'main.book.collection'|trans }}';
\t\t//Tableau avec les URL's
\t\tvar url = {};
\t\turl['grid-authors'] = '{{ path('bird_dashboard_ajax_authors') }}';
\t\turl['grid-cycles'] = '{{ path('bird_dashboard_ajax_cycles') }}';
\t\turl['grid-books'] = '{{ path('bird_dashboard_ajax_books') }}';
\t\turl['ajax'] = '{{ path('bird_ajax') }}';

\t\toptions['language'] = language;
\t\toptions['url'] = url;
\t\toptions['selectedAuthor'] = {{ selected }};
\t\tsetup(options);
\t});

\t</script>
\t{% javascripts '@ORGBirdBundle/Resources/public/js/main.js' %}
\t\t<script src=\"{{ asset_url }}\" type=\"text/javascript\"></script>
\t{% endjavascripts %}
{% endblock %}", "ORGBirdBundle:Main:Main.html.twig", "/var/www/bird/src/ORG/BirdBundle/Resources/views/Main/Main.html.twig");
    }
}
