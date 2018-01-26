<?php

/* ORGBirdBundle:Author:FormAuthor.html.twig */
class __TwigTemplate_dca1a5174a2694cf9e855a4ff3999cd9246fb5025f34bdd65a1fe2d52a6af661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("ORGBirdBundle::layout.html.twig", "ORGBirdBundle:Author:FormAuthor.html.twig", 5);
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
        $__internal_27f75d2131c8ff5d67f252310bd346496a54ca079d05fa5f44294712a53c6a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f75d2131c8ff5d67f252310bd346496a54ca079d05fa5f44294712a53c6a18->enter($__internal_27f75d2131c8ff5d67f252310bd346496a54ca079d05fa5f44294712a53c6a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ORGBirdBundle:Author:FormAuthor.html.twig"));

        $__internal_2dbb543205e079825188e23538fe382dd1252cefb94f8b8e766cd4ba1719f93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dbb543205e079825188e23538fe382dd1252cefb94f8b8e766cd4ba1719f93c->enter($__internal_2dbb543205e079825188e23538fe382dd1252cefb94f8b8e766cd4ba1719f93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ORGBirdBundle:Author:FormAuthor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27f75d2131c8ff5d67f252310bd346496a54ca079d05fa5f44294712a53c6a18->leave($__internal_27f75d2131c8ff5d67f252310bd346496a54ca079d05fa5f44294712a53c6a18_prof);

        
        $__internal_2dbb543205e079825188e23538fe382dd1252cefb94f8b8e766cd4ba1719f93c->leave($__internal_2dbb543205e079825188e23538fe382dd1252cefb94f8b8e766cd4ba1719f93c_prof);

    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a05ff41c781ac84a29da2d2a435c1fc6ddcff155ffc229b9b914d28c6eb88f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05ff41c781ac84a29da2d2a435c1fc6ddcff155ffc229b9b914d28c6eb88f09->enter($__internal_a05ff41c781ac84a29da2d2a435c1fc6ddcff155ffc229b9b914d28c6eb88f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_20fc3db4ea5b57470e807ed73a8e607803383bae8338eb9c5eed530e831aa169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fc3db4ea5b57470e807ed73a8e607803383bae8338eb9c5eed530e831aa169->enter($__internal_20fc3db4ea5b57470e807ed73a8e607803383bae8338eb9c5eed530e831aa169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 9
        echo "    ";
        $this->loadTemplate("ORGBirdBundle:Menu:mainmenu.html.twig", "ORGBirdBundle:Author:FormAuthor.html.twig", 9)->display($context);
        
        $__internal_20fc3db4ea5b57470e807ed73a8e607803383bae8338eb9c5eed530e831aa169->leave($__internal_20fc3db4ea5b57470e807ed73a8e607803383bae8338eb9c5eed530e831aa169_prof);

        
        $__internal_a05ff41c781ac84a29da2d2a435c1fc6ddcff155ffc229b9b914d28c6eb88f09->leave($__internal_a05ff41c781ac84a29da2d2a435c1fc6ddcff155ffc229b9b914d28c6eb88f09_prof);

    }

    // line 12
    public function block_bird_body($context, array $blocks = array())
    {
        $__internal_d9bf70ff16948b0587dbaf4d1551079d996875796af72834e9fe1d741a0f2e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9bf70ff16948b0587dbaf4d1551079d996875796af72834e9fe1d741a0f2e39->enter($__internal_d9bf70ff16948b0587dbaf4d1551079d996875796af72834e9fe1d741a0f2e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bird_body"));

        $__internal_ba5e99f77bf355395728b64fb10fdd35dbeb4552ea9708fba6eb586f358932c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5e99f77bf355395728b64fb10fdd35dbeb4552ea9708fba6eb586f358932c2->enter($__internal_ba5e99f77bf355395728b64fb10fdd35dbeb4552ea9708fba6eb586f358932c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bird_body"));

        // line 13
        echo "<div class=\"well\">

    ";
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), array(0 => "ORGBirdBundle:Form:form_errors.html.twig"), true);
        // line 16
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "form")));
        echo "

    <table style=\"width: 100%\">
        <tr>
            <td colspan=\"2\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'errors');
        echo "
            </td>
        </tr>
        <tr>
            <td style=\"width: 25%;vertical-align: top; text-align: center;\">
                <div class=\"well well-sm\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.author.image", array(), "ORGBirdBundleAuthor"), "html", null, true);
        echo "</div>
                <div class=\"well well-sm\" style=\"cursor: zoom-in\" id=\"img_author\">
                    ";
        // line 28
        if ((null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["imageroot"]) || array_key_exists("imageroot", $context) ? $context["imageroot"] : (function () { throw new Twig_Error_Runtime('Variable "imageroot" does not exist.', 28, $this->getSourceContext()); })()), "fullpath", array()))) {
            // line 29
            echo "                        ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "3462ab5_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3462ab5_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/3462ab5_default-author_1.png");
                // line 30
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 30, $this->getSourceContext()); })()), "html", null, true);
                echo "\" style=\"height: 142px; max-width: 250px\" id=\"thumb\">
                        ";
            } else {
                // asset "3462ab5"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3462ab5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/3462ab5.png");
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 30, $this->getSourceContext()); })()), "html", null, true);
                echo "\" style=\"height: 142px; max-width: 250px\" id=\"thumb\">
                        ";
            }
            unset($context["asset_url"]);
            // line 32
            echo "                    ";
        } else {
            // line 33
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["imageroot"]) || array_key_exists("imageroot", $context) ? $context["imageroot"] : (function () { throw new Twig_Error_Runtime('Variable "imageroot" does not exist.', 33, $this->getSourceContext()); })()), "fullpath", array())), "html", null, true);
            echo "\"  style=\"height: 142px; max-width: 250px\" id=\"thumb\">
                    ";
        }
        // line 35
        echo "                </div>

                <div class=\"form-group\">
                    ";
        // line 39
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "image", array()), 'errors');
        echo "
                    <div class=\"col-sm-12\">
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "image", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "lastname", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
        echo "
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), "lastname", array()), 'errors');
        echo "
                    <div class=\"col-sm-9\">
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "lastname", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "firstname", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
        echo "
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "firstname", array()), 'errors');
        echo "
                    <div class=\"col-sm-9\">
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "firstname", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                    </div>
                </div>
                <div style=\"margin-left: 20px; margin-bottom: 20px\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"  style=\"border: none\"><a href=\"#tab1default\" data-toggle=\"pill\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.author.tab.1", array(), "ORGBirdBundleAuthor"), "html", null, true);
        echo "</a></li>
                        <li  style=\"border: none\"><a href=\"#tab2default\" data-toggle=\"pill\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.author.tab.2", array(), "ORGBirdBundleAuthor"), "html", null, true);
        echo "</a></li>
                    </ul>
                    ";
        // line 67
        echo "                    <div style=\"border: #dddddd 2px solid; padding: 10px; \">
                    <div class=\"tab-content\" style=\"\">
                        ";
        // line 70
        echo "                        <div class=\"tab-pane fade in active\" id=\"tab1default\">

                                <div class=\"form-group\">
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), "bornLastname", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
        echo "
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->getSourceContext()); })()), "bornLastname", array()), 'errors');
        echo "
                                    <div class=\"col-sm-9\">
                                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), "bornLastname", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->getSourceContext()); })()), "bornFirstname", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
        echo "
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->getSourceContext()); })()), "bornFirstname", array()), 'errors');
        echo "
                                    <div class=\"col-sm-9\">
                                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->getSourceContext()); })()), "bornFirstname", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                                    </div>
                                </div>



                                <div class=\"form-group\">
                                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->getSourceContext()); })()), "biography", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
        echo "
                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 92, $this->getSourceContext()); })()), "biography", array()), 'errors');
        echo "
                                    <div class=\"col-sm-9\">
                                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), "biography", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->getSourceContext()); })()), "comment", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
        echo "
                                    <div class=\"col-sm-9\">
                                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "comment", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "borndate", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
        echo "
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->getSourceContext()); })()), "borndate", array()), 'errors');
        echo "
                                    <div class=\"col-sm-3\">
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 109, $this->getSourceContext()); })()), "borndate", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "deathdate", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
        echo "
                                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "deathdate", array()), 'errors');
        echo "
                                    <div class=\"col-sm-3\">
                                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->getSourceContext()); })()), "deathdate", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                                    </div>
                                </div>
                            </div>
                            ";
        // line 122
        echo "                            <div class=\"tab-pane fade\" id=\"tab2default\">
                                ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->getSourceContext()); })()), "linkfieldsauthors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["linkfield"]) {
            // line 124
            echo "                                    <div class=\"form-group\">
                                        ";
            // line 125
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["linkfield"], "field", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
            echo "
                                        <div class=\"col-sm-3\">
                                            ";
            // line 127
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["linkfield"], "field", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
            echo "
                                        </div>
                                    </div>
                                    <div>
                                        ";
            // line 131
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["linkfield"], "type", array()), 'widget');
            echo "
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linkfield'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    ";
        // line 143
        echo "    <div class=\"row\">
        <div class=\"col-sm-12 text-right\">
                ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        </div>
    </div>
    ";
        // line 148
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), 'form_end');
        echo "
</div>

    ";
        // line 152
        echo "    <div class=\"modal fade\" id=\"enlargeImageModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"enlargeImageModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                </div>
                <div class=\"modal-body text-center\">
                    <img src=\"\" class=\"enlargeImageModalSource\" style=\"width: 100%; max-width: 400px\">
                </div>
            </div>
        </div>
    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function(){
            var options = {};
            var url = {};
            url['exist_author'] = '";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bird_author_ajax");
        echo "';
            options['language'] = 'fr';
            options['url'] = url;
            setup(options);
        });

    </script>
    ";
        // line 177
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "27ce736_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_27ce736_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/27ce736_authorForm_1.js");
            // line 178
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 178, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        } else {
            // asset "27ce736"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_27ce736") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/27ce736.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 178, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_ba5e99f77bf355395728b64fb10fdd35dbeb4552ea9708fba6eb586f358932c2->leave($__internal_ba5e99f77bf355395728b64fb10fdd35dbeb4552ea9708fba6eb586f358932c2_prof);

        
        $__internal_d9bf70ff16948b0587dbaf4d1551079d996875796af72834e9fe1d741a0f2e39->leave($__internal_d9bf70ff16948b0587dbaf4d1551079d996875796af72834e9fe1d741a0f2e39_prof);

    }

    public function getTemplateName()
    {
        return "ORGBirdBundle:Author:FormAuthor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 178,  386 => 177,  376 => 170,  356 => 152,  350 => 148,  344 => 145,  340 => 143,  330 => 134,  321 => 131,  314 => 127,  309 => 125,  306 => 124,  302 => 123,  299 => 122,  292 => 117,  287 => 115,  283 => 114,  275 => 109,  270 => 107,  266 => 106,  258 => 101,  253 => 99,  245 => 94,  240 => 92,  236 => 91,  226 => 84,  221 => 82,  217 => 81,  209 => 76,  204 => 74,  200 => 73,  195 => 70,  191 => 67,  186 => 64,  182 => 63,  174 => 58,  169 => 56,  165 => 55,  157 => 50,  152 => 48,  148 => 47,  139 => 41,  133 => 39,  128 => 35,  122 => 33,  119 => 32,  105 => 30,  100 => 29,  98 => 28,  93 => 26,  85 => 21,  76 => 16,  74 => 15,  70 => 13,  61 => 12,  50 => 9,  41 => 8,  11 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
User: a49974
Date: 7/06/2017
 #}
{% extends \"ORGBirdBundle::layout.html.twig\" %}
{% trans_default_domain \"ORGBirdBundleAuthor\" %}

{% block menu %}
    {% include 'ORGBirdBundle:Menu:mainmenu.html.twig' %}
{% endblock %}

{% block bird_body %}
<div class=\"well\">

    {% form_theme form 'ORGBirdBundle:Form:form_errors.html.twig' %}
    {{ form_start(form, {'attr': {'class': 'form-horizontal', 'id': 'form'}}) }}

    <table style=\"width: 100%\">
        <tr>
            <td colspan=\"2\">
                {{ form_errors(form) }}
            </td>
        </tr>
        <tr>
            <td style=\"width: 25%;vertical-align: top; text-align: center;\">
                <div class=\"well well-sm\">{{ 'form.author.image'|trans }}</div>
                <div class=\"well well-sm\" style=\"cursor: zoom-in\" id=\"img_author\">
                    {% if imageroot.fullpath is null %}
                        {% image '@ORGBirdBundle/Resources/public/images/default-author.png'  %}
                            <img src=\"{{ asset_url }}\" style=\"height: 142px; max-width: 250px\" id=\"thumb\">
                        {% endimage %}
                    {% else %}
                        <img src=\"{{ asset(imageroot.fullpath) }}\"  style=\"height: 142px; max-width: 250px\" id=\"thumb\">
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    {#{{ form_label(form.image, 'form.author.image'|trans~\" :\",{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}#}
                    {{ form_errors(form.image) }}
                    <div class=\"col-sm-12\">
                        {{ form_widget(form.image, {'attr': {'class': 'form-control input-sm'}}) }}
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    {{ form_label(form.lastname, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                    {{ form_errors(form.lastname) }}
                    <div class=\"col-sm-9\">
                        {{ form_widget(form.lastname, {'attr': {'class': 'form-control input-sm'}}) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.firstname, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                    {{ form_errors(form.firstname) }}
                    <div class=\"col-sm-9\">
                        {{ form_widget(form.firstname, {'attr': {'class': 'form-control input-sm'}}) }}
                    </div>
                </div>
                <div style=\"margin-left: 20px; margin-bottom: 20px\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"  style=\"border: none\"><a href=\"#tab1default\" data-toggle=\"pill\">{{ 'form.author.tab.1'|trans }}</a></li>
                        <li  style=\"border: none\"><a href=\"#tab2default\" data-toggle=\"pill\">{{ 'form.author.tab.2'|trans }}</a></li>
                    </ul>
                    {# Start TAB #}
                    <div style=\"border: #dddddd 2px solid; padding: 10px; \">
                    <div class=\"tab-content\" style=\"\">
                        {#Tab 1#}
                        <div class=\"tab-pane fade in active\" id=\"tab1default\">

                                <div class=\"form-group\">
                                    {{ form_label(form.bornLastname, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                                    {{ form_errors(form.bornLastname) }}
                                    <div class=\"col-sm-9\">
                                        {{ form_widget(form.bornLastname, {'attr': {'class': 'form-control input-sm'}}) }}
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    {{ form_label(form.bornFirstname, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                                    {{ form_errors(form.bornFirstname) }}
                                    <div class=\"col-sm-9\">
                                        {{ form_widget(form.bornFirstname, {'attr': {'class': 'form-control input-sm'}}) }}
                                    </div>
                                </div>



                                <div class=\"form-group\">
                                    {{ form_label(form.biography, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                                    {{ form_errors(form.biography) }}
                                    <div class=\"col-sm-9\">
                                        {{ form_widget(form.biography, {'attr': {'class': 'form-control input-sm'}}) }}
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    {{ form_label(form.comment, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                                    <div class=\"col-sm-9\">
                                        {{ form_widget(form.comment, {'attr': {'class': 'form-control input-sm'}}) }}
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    {{ form_label(form.borndate, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                                    {{ form_errors(form.borndate) }}
                                    <div class=\"col-sm-3\">
                                        {{ form_widget(form.borndate, {'attr': {'class': 'form-control input-sm'}}) }}
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    {{ form_label(form.deathdate, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                                    {{ form_errors(form.deathdate) }}
                                    <div class=\"col-sm-3\">
                                        {{ form_widget(form.deathdate, {'attr': {'class': 'form-control input-sm'}}) }}
                                    </div>
                                </div>
                            </div>
                            {# TAB 2#}
                            <div class=\"tab-pane fade\" id=\"tab2default\">
                                {% for linkfield in form.linkfieldsauthors %}
                                    <div class=\"form-group\">
                                        {{ form_label(linkfield.field,'' ,{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                                        <div class=\"col-sm-3\">
                                            {{ form_widget(linkfield.field, {'attr': {'class': 'form-control input-sm'}}) }}
                                        </div>
                                    </div>
                                    <div>
                                        {{ form_widget(linkfield.type) }}
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    {#Footer#}
    <div class=\"row\">
        <div class=\"col-sm-12 text-right\">
                {{ form_widget(form.save,{'attr': {'class': 'btn btn-primary'}}) }}
        </div>
    </div>
    {{ form_end(form) }}
</div>

    {# Modal pour afficher l'image de l'auteur en grand format#}
    <div class=\"modal fade\" id=\"enlargeImageModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"enlargeImageModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                </div>
                <div class=\"modal-body text-center\">
                    <img src=\"\" class=\"enlargeImageModalSource\" style=\"width: 100%; max-width: 400px\">
                </div>
            </div>
        </div>
    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function(){
            var options = {};
            var url = {};
            url['exist_author'] = '{{ path('bird_author_ajax') }}';
            options['language'] = 'fr';
            options['url'] = url;
            setup(options);
        });

    </script>
    {% javascripts '@ORGBirdBundle/Resources/public/js/authorForm.js' %}
    <script src=\"{{ asset_url }}\" type=\"text/javascript\"></script>
    {% endjavascripts %}
{% endblock %}", "ORGBirdBundle:Author:FormAuthor.html.twig", "/var/www/bird/src/ORG/BirdBundle/Resources/views/Author/FormAuthor.html.twig");
    }
}
