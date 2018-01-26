<?php

/* ORGBirdBundle:Menu:mainmenu.html.twig */
class __TwigTemplate_0d6d28dcbef4a3d6b06b5b55f923c5a1c57b5f87954e71ae267ba1daa305b755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3014c5ab04ecbe1e00f4a9f2835950b03c343524376503416f8b44c53748183f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3014c5ab04ecbe1e00f4a9f2835950b03c343524376503416f8b44c53748183f->enter($__internal_3014c5ab04ecbe1e00f4a9f2835950b03c343524376503416f8b44c53748183f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ORGBirdBundle:Menu:mainmenu.html.twig"));

        $__internal_68f4deb9e43abc85ff12906e47eac25a0a691da679ab6dd50e635272fbfc0589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f4deb9e43abc85ff12906e47eac25a0a691da679ab6dd50e635272fbfc0589->enter($__internal_68f4deb9e43abc85ff12906e47eac25a0a691da679ab6dd50e635272fbfc0589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ORGBirdBundle:Menu:mainmenu.html.twig"));

        // line 6
        if ( !array_key_exists("loginas", $context)) {
            // line 7
            echo "    ";
            $context["loginas"] = "?, ?";
        }
        // line 9
        echo "
<ul class=\"nav navbar-nav\">
    <li class=\"active\"><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bird_homepage");
        echo "\" class=\"\"><i class=\"glyphicon glyphicon-home\"></i></a></li>

    <li class=\" dropdown\"><a href=\"#\" class=\"dropdown-toggle \" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.main.author", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li style=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["menudisabled"]) || array_key_exists("menudisabled", $context) ? $context["menudisabled"] : (function () { throw new Twig_Error_Runtime('Variable "menudisabled" does not exist.', 15, $this->getSourceContext()); })()), "disabled", array(0 => "menu_author_add"), "method"), "html", null, true);
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bird_author_add");
        echo "\" ><i class=\"glyphicon glyphicon-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.add", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "</a></li>
            <li style=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["menudisabled"]) || array_key_exists("menudisabled", $context) ? $context["menudisabled"] : (function () { throw new Twig_Error_Runtime('Variable "menudisabled" does not exist.', 16, $this->getSourceContext()); })()), "disabled", array(0 => "menu_author_edit"), "method"), "html", null, true);
        echo "\"><a href=\"#\"  id=\"menu_author_edit\"><i class=\"glyphicon glyphicon-edit\" id=\"menu_author_edit\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.edit", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "</a></li>
            <li style=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["menudisabled"]) || array_key_exists("menudisabled", $context) ? $context["menudisabled"] : (function () { throw new Twig_Error_Runtime('Variable "menudisabled" does not exist.', 17, $this->getSourceContext()); })()), "disabled", array(0 => "menu_author_delete"), "method"), "html", null, true);
        echo "\"><a href=\"#\" id=\"menu_author_delete\"><i class=\"glyphicon glyphicon-erase\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.delete", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "</a></li>
        </ul>
    </li>
    <li class=\" dropdown\"><a href=\"#\" class=\"dropdown-toggle \" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.main.cycle", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li style=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["menudisabled"]) || array_key_exists("menudisabled", $context) ? $context["menudisabled"] : (function () { throw new Twig_Error_Runtime('Variable "menudisabled" does not exist.', 22, $this->getSourceContext()); })()), "disabled", array(0 => "menu_cycle_edit"), "method"), "html", null, true);
        echo "\"><a href=\"#\"><i class=\"glyphicon glyphicon-edit\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.edit", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "</a></li>
            <li style=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["menudisabled"]) || array_key_exists("menudisabled", $context) ? $context["menudisabled"] : (function () { throw new Twig_Error_Runtime('Variable "menudisabled" does not exist.', 23, $this->getSourceContext()); })()), "disabled", array(0 => "menu_cycle_delete"), "method"), "html", null, true);
        echo "\"><a href=\"#\"><i class=\"glyphicon glyphicon-erase\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.delete", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "</a></li>
        </ul>
    </li>
    <li class=\" dropdown\"><a href=\"#\" class=\"dropdown-toggle active\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.main.book", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li style=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["menudisabled"]) || array_key_exists("menudisabled", $context) ? $context["menudisabled"] : (function () { throw new Twig_Error_Runtime('Variable "menudisabled" does not exist.', 28, $this->getSourceContext()); })()), "disabled", array(0 => "menu_book_add"), "method"), "html", null, true);
        echo "\"><a href=\"#\" id=\"menu_book_add\"><i class=\"glyphicon glyphicon-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.add", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "</a></li>
            <li style=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["menudisabled"]) || array_key_exists("menudisabled", $context) ? $context["menudisabled"] : (function () { throw new Twig_Error_Runtime('Variable "menudisabled" does not exist.', 29, $this->getSourceContext()); })()), "disabled", array(0 => "menu_book_edit"), "method"), "html", null, true);
        echo "\"><a href=\"#\" id=\"menu_book_edit\"><i class=\"glyphicon glyphicon-edit\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.edit", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "</a></li>
            <li style=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["menudisabled"]) || array_key_exists("menudisabled", $context) ? $context["menudisabled"] : (function () { throw new Twig_Error_Runtime('Variable "menudisabled" does not exist.', 30, $this->getSourceContext()); })()), "disabled", array(0 => "menu_book_delete"), "method"), "html", null, true);
        echo "\"><a href=\"#\"><i class=\"glyphicon glyphicon-erase\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.delete", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "</a></li>
        </ul>
    </li>
    <li class=\" down\"><a href=\"#\" class=\"dropdown-toggle active\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">FreeBird <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li style=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["menudisabled"]) || array_key_exists("menudisabled", $context) ? $context["menudisabled"] : (function () { throw new Twig_Error_Runtime('Variable "menudisabled" does not exist.', 35, $this->getSourceContext()); })()), "disabled", array(0 => "menu_help"), "method"), "html", null, true);
        echo "\"><a href=\"#\"><i class=\"glyphicon glyphicon-lamp\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.help", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "</a></li>
        </ul>
    </li>

</ul>
<ul class=\"nav navbar-nav pull-right\">
    <li class=\" dropdown\"><a href=\"#\" class=\"dropdown-toggle active\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.signed", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["loginas"]) || array_key_exists("loginas", $context) ? $context["loginas"] : (function () { throw new Twig_Error_Runtime('Variable "loginas" does not exist.', 41, $this->getSourceContext()); })()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li style=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["menudisabled"]) || array_key_exists("menudisabled", $context) ? $context["menudisabled"] : (function () { throw new Twig_Error_Runtime('Variable "menudisabled" does not exist.', 43, $this->getSourceContext()); })()), "disabled", array(0 => "menu_admin_password"), "method"), "html", null, true);
        echo "\"><a href=\"#\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.password", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "</a></li>
            <li style=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["menudisabled"]) || array_key_exists("menudisabled", $context) ? $context["menudisabled"] : (function () { throw new Twig_Error_Runtime('Variable "menudisabled" does not exist.', 44, $this->getSourceContext()); })()), "disabled", array(0 => "menu_admin_profile"), "method"), "html", null, true);
        echo "\"><a href=\"#\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.profile", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "</a></li>
        </ul>
    </li>
    <li class=\"\"><a href=\"#\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.menu.logout", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "</a></li>
</ul>

<script type=\"text/javascript\">

    \$(document).ready(function(){
        var options = {};
        //Tableau avec la traduction des titres
        var language = {};
        language['modal.messages.add.book'] = '";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.messages.add.book", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "';
        language['modal.messages.btn.new'] = '";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.messages.btn.new", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "';
        language['modal.messages.btn.existing'] = '";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.messages.btn.existing", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "';
        language['modal.messages.btn.no'] = '";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.messages.btn.no", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "';
        language['modal.messages.btn.yes'] = '";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.messages.btn.yes", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "';
        language['modal.messages.btn.close'] = '";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.messages.btn.close", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "';
        language['modal.messages.no.book'] = '";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.messages.no.book", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "';
        language['modal.messages.title.warning'] = '";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modal.messages.title.warning", array(), "ORGBirdBundleMenu"), "html", null, true);
        echo "';

        //Tableau avec les URL's
        var url = {};
        url['menu-author-edit'] = '";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bird_author_edit", array("id" => 0));
        echo "';
        url['menu-book-add'] = '";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bird_book_add", array("idAuthor" => 0));
        echo "';
        url['menu-cycle-new-book-add'] = '";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bird_book_add", array("idAuthor" => 0, "isCycle" => "true")), "html", null, true);
        echo "';
        url['menu-cycle-edit-book-add'] = '";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bird_book_add", array("idAuthor" => 0, "isCycle" => "true", "isNew" => "false")), "html", null, true);
        echo "';
        url['menu-book-edit'] = '";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bird_book_edit", array("id" => 0));
        echo "';
        url['ajax'] = '";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bird_ajax");
        echo "';
        options['language'] = language;
        options['url'] = url;
        setupMainMenu(options);
    });

</script>

";
        // line 80
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8c58077_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8c58077_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/8c58077_mainmenu_1.js");
            // line 81
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 81, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        } else {
            // asset "8c58077"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8c58077") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/8c58077.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 81, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        }
        unset($context["asset_url"]);
        
        $__internal_3014c5ab04ecbe1e00f4a9f2835950b03c343524376503416f8b44c53748183f->leave($__internal_3014c5ab04ecbe1e00f4a9f2835950b03c343524376503416f8b44c53748183f_prof);

        
        $__internal_68f4deb9e43abc85ff12906e47eac25a0a691da679ab6dd50e635272fbfc0589->leave($__internal_68f4deb9e43abc85ff12906e47eac25a0a691da679ab6dd50e635272fbfc0589_prof);

    }

    public function getTemplateName()
    {
        return "ORGBirdBundle:Menu:mainmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 81,  223 => 80,  212 => 72,  208 => 71,  204 => 70,  200 => 69,  196 => 68,  192 => 67,  185 => 63,  181 => 62,  177 => 61,  173 => 60,  169 => 59,  165 => 58,  161 => 57,  157 => 56,  145 => 47,  137 => 44,  131 => 43,  124 => 41,  113 => 35,  103 => 30,  97 => 29,  91 => 28,  86 => 26,  78 => 23,  72 => 22,  67 => 20,  59 => 17,  53 => 16,  45 => 15,  40 => 13,  35 => 11,  31 => 9,  27 => 7,  25 => 6,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
User: a49974
Date: 2/06/2017
 #}
{% trans_default_domain \"ORGBirdBundleMenu\" %}
{% if loginas is not defined %}
    {% set loginas = '?, ?' %}
{% endif %}

<ul class=\"nav navbar-nav\">
    <li class=\"active\"><a href=\"{{ path('bird_homepage') }}\" class=\"\"><i class=\"glyphicon glyphicon-home\"></i></a></li>

    <li class=\" dropdown\"><a href=\"#\" class=\"dropdown-toggle \" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ 'main.menu.main.author'|trans }} <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li style=\"{{ menudisabled.disabled('menu_author_add') }}\"><a href=\"{{ path('bird_author_add') }}\" ><i class=\"glyphicon glyphicon-plus\"></i> {{ 'main.menu.add'|trans }}</a></li>
            <li style=\"{{ menudisabled.disabled('menu_author_edit') }}\"><a href=\"#\"  id=\"menu_author_edit\"><i class=\"glyphicon glyphicon-edit\" id=\"menu_author_edit\"></i> {{ 'main.menu.edit'|trans }}</a></li>
            <li style=\"{{ menudisabled.disabled('menu_author_delete') }}\"><a href=\"#\" id=\"menu_author_delete\"><i class=\"glyphicon glyphicon-erase\"></i> {{ 'main.menu.delete'|trans }}</a></li>
        </ul>
    </li>
    <li class=\" dropdown\"><a href=\"#\" class=\"dropdown-toggle \" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ 'main.menu.main.cycle'|trans }} <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li style=\"{{ menudisabled.disabled('menu_cycle_edit') }}\"><a href=\"#\"><i class=\"glyphicon glyphicon-edit\"></i> {{ 'main.menu.edit'|trans }}</a></li>
            <li style=\"{{ menudisabled.disabled('menu_cycle_delete') }}\"><a href=\"#\"><i class=\"glyphicon glyphicon-erase\"></i> {{ 'main.menu.delete'|trans }}</a></li>
        </ul>
    </li>
    <li class=\" dropdown\"><a href=\"#\" class=\"dropdown-toggle active\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ 'main.menu.main.book'|trans }} <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li style=\"{{ menudisabled.disabled('menu_book_add') }}\"><a href=\"#\" id=\"menu_book_add\"><i class=\"glyphicon glyphicon-plus\"></i> {{ 'main.menu.add'|trans }}</a></li>
            <li style=\"{{ menudisabled.disabled('menu_book_edit') }}\"><a href=\"#\" id=\"menu_book_edit\"><i class=\"glyphicon glyphicon-edit\"></i> {{ 'main.menu.edit'|trans }}</a></li>
            <li style=\"{{ menudisabled.disabled('menu_book_delete') }}\"><a href=\"#\"><i class=\"glyphicon glyphicon-erase\"></i> {{ 'main.menu.delete'|trans }}</a></li>
        </ul>
    </li>
    <li class=\" down\"><a href=\"#\" class=\"dropdown-toggle active\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">FreeBird <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li style=\"{{ menudisabled.disabled('menu_help') }}\"><a href=\"#\"><i class=\"glyphicon glyphicon-lamp\"></i> {{ 'main.menu.help'|trans }}</a></li>
        </ul>
    </li>

</ul>
<ul class=\"nav navbar-nav pull-right\">
    <li class=\" dropdown\"><a href=\"#\" class=\"dropdown-toggle active\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ 'main.menu.signed'|trans }} {{ loginas }} <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li style=\"{{ menudisabled.disabled('menu_admin_password') }}\"><a href=\"#\">{{ 'main.menu.password'|trans }}</a></li>
            <li style=\"{{ menudisabled.disabled('menu_admin_profile') }}\"><a href=\"#\">{{ 'main.menu.profile'|trans }}</a></li>
        </ul>
    </li>
    <li class=\"\"><a href=\"#\">{{ 'main.menu.logout'|trans }}</a></li>
</ul>

<script type=\"text/javascript\">

    \$(document).ready(function(){
        var options = {};
        //Tableau avec la traduction des titres
        var language = {};
        language['modal.messages.add.book'] = '{{ 'modal.messages.add.book'|trans }}';
        language['modal.messages.btn.new'] = '{{ 'modal.messages.btn.new'|trans }}';
        language['modal.messages.btn.existing'] = '{{ 'modal.messages.btn.existing'|trans }}';
        language['modal.messages.btn.no'] = '{{ 'modal.messages.btn.no'|trans }}';
        language['modal.messages.btn.yes'] = '{{ 'modal.messages.btn.yes'|trans }}';
        language['modal.messages.btn.close'] = '{{ 'modal.messages.btn.close'|trans }}';
        language['modal.messages.no.book'] = '{{ 'modal.messages.no.book'|trans }}';
        language['modal.messages.title.warning'] = '{{ 'modal.messages.title.warning'|trans }}';

        //Tableau avec les URL's
        var url = {};
        url['menu-author-edit'] = '{{ path('bird_author_edit',{'id': 0}) }}';
        url['menu-book-add'] = '{{ path('bird_book_add',{'idAuthor': 0}) }}';
        url['menu-cycle-new-book-add'] = '{{ path('bird_book_add',{'idAuthor': 0, 'isCycle': 'true'}) }}';
        url['menu-cycle-edit-book-add'] = '{{ path('bird_book_add',{'idAuthor': 0, 'isCycle': 'true', 'isNew': 'false'}) }}';
        url['menu-book-edit'] = '{{ path('bird_book_edit',{'id': 0}) }}';
        url['ajax'] = '{{ path('bird_ajax') }}';
        options['language'] = language;
        options['url'] = url;
        setupMainMenu(options);
    });

</script>

{% javascripts '@ORGBirdBundle/Resources/public/js/mainmenu.js' %}
    <script src=\"{{ asset_url }}\" type=\"text/javascript\"></script>
{% endjavascripts %}
", "ORGBirdBundle:Menu:mainmenu.html.twig", "/var/www/bird/src/ORG/BirdBundle/Resources/views/Menu/mainmenu.html.twig");
    }
}
