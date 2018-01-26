<?php

/* ORGBirdBundle:CycleBook:FormBook.html.twig */
class __TwigTemplate_746609cf3d4cece3cd7a1fe47f03f62c062be3dd2af301f7fd59ab900b095d45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("ORGBirdBundle::layout.html.twig", "ORGBirdBundle:CycleBook:FormBook.html.twig", 5);
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
        $__internal_1e69930b42038c70c3c1de4e8cf4737c6985e5dac791c5f4aa8f7f29edbdfb1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e69930b42038c70c3c1de4e8cf4737c6985e5dac791c5f4aa8f7f29edbdfb1b->enter($__internal_1e69930b42038c70c3c1de4e8cf4737c6985e5dac791c5f4aa8f7f29edbdfb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ORGBirdBundle:CycleBook:FormBook.html.twig"));

        $__internal_cbdf4b6026795fdafb52c66d8a64686c6a622c5a05f83227f13ffe260f903672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdf4b6026795fdafb52c66d8a64686c6a622c5a05f83227f13ffe260f903672->enter($__internal_cbdf4b6026795fdafb52c66d8a64686c6a622c5a05f83227f13ffe260f903672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ORGBirdBundle:CycleBook:FormBook.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e69930b42038c70c3c1de4e8cf4737c6985e5dac791c5f4aa8f7f29edbdfb1b->leave($__internal_1e69930b42038c70c3c1de4e8cf4737c6985e5dac791c5f4aa8f7f29edbdfb1b_prof);

        
        $__internal_cbdf4b6026795fdafb52c66d8a64686c6a622c5a05f83227f13ffe260f903672->leave($__internal_cbdf4b6026795fdafb52c66d8a64686c6a622c5a05f83227f13ffe260f903672_prof);

    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f6f7b9db83bc1b1a0d6e3a0e129068c7e5a0ca9d7aa64fb23abea5eba1df5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f6f7b9db83bc1b1a0d6e3a0e129068c7e5a0ca9d7aa64fb23abea5eba1df5d5->enter($__internal_5f6f7b9db83bc1b1a0d6e3a0e129068c7e5a0ca9d7aa64fb23abea5eba1df5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fa5875c6ec899b40e018ff87ab8c0742502cdeac445ed3adccf471dc233b9833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5875c6ec899b40e018ff87ab8c0742502cdeac445ed3adccf471dc233b9833->enter($__internal_fa5875c6ec899b40e018ff87ab8c0742502cdeac445ed3adccf471dc233b9833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 9
        echo "    ";
        $this->loadTemplate("ORGBirdBundle:Menu:mainmenu.html.twig", "ORGBirdBundle:CycleBook:FormBook.html.twig", 9)->display($context);
        
        $__internal_fa5875c6ec899b40e018ff87ab8c0742502cdeac445ed3adccf471dc233b9833->leave($__internal_fa5875c6ec899b40e018ff87ab8c0742502cdeac445ed3adccf471dc233b9833_prof);

        
        $__internal_5f6f7b9db83bc1b1a0d6e3a0e129068c7e5a0ca9d7aa64fb23abea5eba1df5d5->leave($__internal_5f6f7b9db83bc1b1a0d6e3a0e129068c7e5a0ca9d7aa64fb23abea5eba1df5d5_prof);

    }

    // line 12
    public function block_bird_body($context, array $blocks = array())
    {
        $__internal_3064d4360b4b8d4f1d67002b5127d0b40ea6c70c9b0a5e1959e4329064bc2afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3064d4360b4b8d4f1d67002b5127d0b40ea6c70c9b0a5e1959e4329064bc2afd->enter($__internal_3064d4360b4b8d4f1d67002b5127d0b40ea6c70c9b0a5e1959e4329064bc2afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bird_body"));

        $__internal_7762dc4efe02226925b024e7500c9f7e5e6d4bce4adcad62e61e79fb3a5f2955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7762dc4efe02226925b024e7500c9f7e5e6d4bce4adcad62e61e79fb3a5f2955->enter($__internal_7762dc4efe02226925b024e7500c9f7e5e6d4bce4adcad62e61e79fb3a5f2955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bird_body"));

        // line 13
        echo "    <div class=\"well\">

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
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'errors');
        echo "
                </td>
            </tr>
            <tr>
                <td style=\"width: 25%;vertical-align: top; text-align: center;\">
                    <div class=\"well well-sm\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.cyclebook.image", array(), "ORGBirdBundleCycleBook"), "html", null, true);
        echo "</div>
                    <div class=\"well well-sm\" style=\"cursor: zoom-in\" id=\"img_book\">
                        ";
        // line 27
        if ((null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["imageroot"]) || array_key_exists("imageroot", $context) ? $context["imageroot"] : (function () { throw new Twig_Error_Runtime('Variable "imageroot" does not exist.', 27, $this->getSourceContext()); })()), "fullpath", array()))) {
            // line 28
            echo "                            ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "f1158d4_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f1158d4_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/f1158d4_default-book_1.png");
                // line 29
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 29, $this->getSourceContext()); })()), "html", null, true);
                echo "\" style=\"height: 142px; max-width: 250px\" id=\"thumb\">
                            ";
            } else {
                // asset "f1158d4"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f1158d4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/f1158d4.png");
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 29, $this->getSourceContext()); })()), "html", null, true);
                echo "\" style=\"height: 142px; max-width: 250px\" id=\"thumb\">
                            ";
            }
            unset($context["asset_url"]);
            // line 31
            echo "                        ";
        } else {
            // line 32
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["imageroot"]) || array_key_exists("imageroot", $context) ? $context["imageroot"] : (function () { throw new Twig_Error_Runtime('Variable "imageroot" does not exist.', 32, $this->getSourceContext()); })()), "fullpath", array())), "html", null, true);
            echo "\"  style=\"height: 142px; max-width: 250px\" id=\"thumb\">
                        ";
        }
        // line 34
        echo "                    </div>

                    <div class=\"form-group\">
                        ";
        // line 38
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "image", array()), 'errors');
        echo "
                        <div class=\"col-sm-12\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "image", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                        </div>
                    </div>
                </td>
                <td>
                    <div class=\"form-group\">
                        ";
        // line 46
        if ((isset($context["iscycle"]) || array_key_exists("iscycle", $context) ? $context["iscycle"] : (function () { throw new Twig_Error_Runtime('Variable "iscycle" does not exist.', 46, $this->getSourceContext()); })())) {
            // line 47
            echo "                            ";
            // line 48
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), "cycle", array()), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
            echo "
                            ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->getSourceContext()); })()), "cycle", array()), "title", array()), 'errors');
            echo "
                            <div class=\"col-sm-9\">
                                ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), "cycle", array()), "title", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
            echo "
                            </div>
                        ";
        } else {
            // line 54
            echo "                            ";
            // line 55
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
            echo "
                            ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "title", array()), 'errors');
            echo "
                            <div class=\"col-sm-9\">
                                ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "title", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
            echo "
                            </div>
                            ";
            // line 61
            echo "                        ";
        }
        // line 62
        echo "                    </div>
                    <div class=\"form-group\">
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->getSourceContext()); })()), "cycle", array()), "authors", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), "cycle", array()), "authors", array()), 'errors');
        echo "
                        <div class=\"col-sm-9\">
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->getSourceContext()); })()), "cycle", array()), "authors", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                        </div>
                    </div>
                    ";
        // line 71
        echo "                    ";
        if ((isset($context["iscycle"]) || array_key_exists("iscycle", $context) ? $context["iscycle"] : (function () { throw new Twig_Error_Runtime('Variable "iscycle" does not exist.', 71, $this->getSourceContext()); })())) {
            // line 72
            echo "                        <div class=\"form-group\">
                            ";
            // line 73
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), "cycle", array()), "type", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
            echo "
                            ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->getSourceContext()); })()), "cycle", array()), "type", array()), 'errors');
            echo "
                            <div class=\"col-sm-9\">
                                ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), "cycle", array()), "type", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
            echo "
                            </div>
                        </div>
                        ";
            // line 80
            echo "                        <div class=\"form-group\">
                            ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->getSourceContext()); })()), "cycle", array()), "nbrvolume", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
            echo "
                            ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->getSourceContext()); })()), "cycle", array()), "nbrvolume", array()), 'errors');
            echo "
                            <div class=\"col-sm-9\">
                                ";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->getSourceContext()); })()), "cycle", array()), "nbrvolume", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
            echo "
                            </div>
                        </div>
                        ";
            // line 88
            echo "                        <div class=\"form-group\">
                            ";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->getSourceContext()); })()), "cycle", array()), "comment", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
            echo "
                            ";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->getSourceContext()); })()), "cycle", array()), "comment", array()), 'errors');
            echo "
                            <div class=\"col-sm-9\">
                                ";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 92, $this->getSourceContext()); })()), "cycle", array()), "comment", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 96
        echo "                    <div style=\"margin-left: 20px; margin-bottom: 20px\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"  style=\"border: none\"><a href=\"#tab1default\" data-toggle=\"pill\">";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.cyclebook.tab.1", array(), "ORGBirdBundleCycleBook"), "html", null, true);
        echo "</a></li>
                            <li  style=\"border: none\"><a href=\"#tab2default\" data-toggle=\"pill\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.cyclebook.tab.2", array(), "ORGBirdBundleCycleBook"), "html", null, true);
        echo "</a></li>
                            ";
        // line 100
        if ((isset($context["iscycle"]) || array_key_exists("iscycle", $context) ? $context["iscycle"] : (function () { throw new Twig_Error_Runtime('Variable "iscycle" does not exist.', 100, $this->getSourceContext()); })())) {
            // line 101
            echo "                                <li  style=\"border: none\"><a href=\"#tab3default\" data-toggle=\"pill\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.cyclebook.tab.3", array(), "ORGBirdBundleCycleBook"), "html", null, true);
            echo "</a></li>
                            ";
        }
        // line 103
        echo "                        </ul>
                        ";
        // line 105
        echo "                        <div style=\"border: #dddddd 2px solid; padding: 10px; \">
                            <div class=\"tab-content\" style=\"\">
                                ";
        // line 108
        echo "                                <div class=\"tab-pane fade in active\" id=\"tab1default\">
                                    ";
        // line 109
        if ((isset($context["iscycle"]) || array_key_exists("iscycle", $context) ? $context["iscycle"] : (function () { throw new Twig_Error_Runtime('Variable "iscycle" does not exist.', 109, $this->getSourceContext()); })())) {
            // line 110
            echo "                                        <div class=\"form-group\">
                                            ";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->getSourceContext()); })()), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
            echo "
                                            ";
            // line 112
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->getSourceContext()); })()), "title", array()), 'errors');
            echo "
                                            <div class=\"col-sm-9\">
                                                ";
            // line 114
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "title", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
            echo "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            ";
            // line 118
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->getSourceContext()); })()), "volume", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
            echo "
                                            ";
            // line 119
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 119, $this->getSourceContext()); })()), "volume", array()), 'errors');
            echo "
                                            <div class=\"col-sm-9\">
                                                ";
            // line 121
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 121, $this->getSourceContext()); })()), "volume", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
            echo "
                                            </div>
                                        </div>                                    ";
        } else {
            // line 124
            echo "                                        <div class=\"form-group\">
                                            ";
            // line 125
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 125, $this->getSourceContext()); })()), "cycle", array()), "type", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
            echo "
                                            ";
            // line 126
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 126, $this->getSourceContext()); })()), "cycle", array()), "type", array()), 'errors');
            echo "
                                            <div class=\"col-sm-9\">
                                                ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "cycle", array()), "type", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
            echo "
                                            </div>
                                        </div>
                                    ";
        }
        // line 132
        echo "                                    ";
        // line 133
        echo "                                    <div class=\"form-group\">
                                        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), "collection", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
        echo "
                                        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), "collection", array()), 'errors');
        echo "
                                        <div class=\"col-sm-9\">
                                            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 137, $this->getSourceContext()); })()), "collection", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                                        </div>
                                    </div>
                                    ";
        // line 141
        echo "                                    <div class=\"form-group\">
                                        ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "editor", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
        echo "
                                        ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "editor", array()), 'errors');
        echo "
                                        <div class=\"col-sm-9\">
                                            ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "editor", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                                        </div>
                                    </div>
                                    ";
        // line 149
        echo "                                    <div class=\"form-group\">
                                        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 150, $this->getSourceContext()); })()), "presentation", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
        echo "
                                        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 151, $this->getSourceContext()); })()), "presentation", array()), 'errors');
        echo "
                                        <div class=\"col-sm-9\">
                                            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "presentation", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                                        </div>
                                    </div>
                                    ";
        // line 157
        echo "                                    <div class=\"form-group\">
                                        ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "format", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
        echo "
                                        ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "format", array()), 'errors');
        echo "
                                        <div class=\"col-sm-9\">
                                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 161, $this->getSourceContext()); })()), "format", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                                        </div>
                                    </div>
                                    ";
        // line 165
        echo "                                    <div class=\"form-group\">
                                        ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 166, $this->getSourceContext()); })()), "isbn", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
        echo "
                                        ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 167, $this->getSourceContext()); })()), "isbn", array()), 'errors');
        echo "
                                        <div class=\"col-sm-9\">
                                            ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 169, $this->getSourceContext()); })()), "isbn", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 174
        echo "                                <div class=\"tab-pane fade\" id=\"tab2default\">
                                    ";
        // line 175
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "linkfieldsbooks", array(), "any", true, true)) {
            // line 176
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 176, $this->getSourceContext()); })()), "linkfieldsbooks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["linkfield"]) {
                // line 177
                echo "                                            <div class=\"form-group\">
                                                ";
                // line 178
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["linkfield"], "field", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
                echo "
                                                <div class=\"col-sm-3\">
                                                    ";
                // line 180
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["linkfield"], "field", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
                echo "
                                                </div>
                                            </div>
                                            <div>
                                                ";
                // line 184
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["linkfield"], "type", array()), 'widget');
                echo "
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linkfield'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                                    ";
        }
        // line 188
        echo "                                </div>
                                ";
        // line 190
        echo "                                ";
        if ((isset($context["iscycle"]) || array_key_exists("iscycle", $context) ? $context["iscycle"] : (function () { throw new Twig_Error_Runtime('Variable "iscycle" does not exist.', 190, $this->getSourceContext()); })())) {
            // line 191
            echo "                                    <div class=\"tab-pane fade\" id=\"tab3default\">
                                        ";
            // line 192
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "cycle", array(), "any", false, true), "linkfieldscycles", array(), "any", true, true)) {
                // line 193
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 193, $this->getSourceContext()); })()), "cycle", array()), "linkfieldscycles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["linkfield"]) {
                    // line 194
                    echo "                                                <div class=\"form-group\">
                                                    ";
                    // line 195
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["linkfield"], "field", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label small")));
                    echo "
                                                    <div class=\"col-sm-3\">
                                                        ";
                    // line 197
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["linkfield"], "field", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
                    echo "
                                                    </div>
                                                </div>
                                                <div>
                                                    ";
                    // line 201
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["linkfield"], "type", array()), 'widget');
                    echo "
                                                </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linkfield'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 204
                echo "                                        ";
            }
            // line 205
            echo "                                    </div>
                                ";
        }
        // line 207
        echo "                            </div>
                        </div>
                    </div>

                </td>

            </tr>
        </table>
        ";
        // line 216
        echo "        <div class=\"row\">
            <div class=\"col-sm-12 text-right\">
                ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 218, $this->getSourceContext()); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
            </div>
        </div>
        ";
        // line 221
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 221, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>

    ";
        // line 225
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
            options['language'] = 'fr';
            options['url'] = url;
            setup(options);
        });

    </script>
    ";
        // line 249
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b6fbdad_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b6fbdad_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/b6fbdad_bookForm_1.js");
            // line 250
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 250, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        } else {
            // asset "b6fbdad"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b6fbdad") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/b6fbdad.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 250, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_7762dc4efe02226925b024e7500c9f7e5e6d4bce4adcad62e61e79fb3a5f2955->leave($__internal_7762dc4efe02226925b024e7500c9f7e5e6d4bce4adcad62e61e79fb3a5f2955_prof);

        
        $__internal_3064d4360b4b8d4f1d67002b5127d0b40ea6c70c9b0a5e1959e4329064bc2afd->leave($__internal_3064d4360b4b8d4f1d67002b5127d0b40ea6c70c9b0a5e1959e4329064bc2afd_prof);

    }

    public function getTemplateName()
    {
        return "ORGBirdBundle:CycleBook:FormBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 250,  578 => 249,  552 => 225,  546 => 221,  540 => 218,  536 => 216,  526 => 207,  522 => 205,  519 => 204,  510 => 201,  503 => 197,  498 => 195,  495 => 194,  490 => 193,  488 => 192,  485 => 191,  482 => 190,  479 => 188,  476 => 187,  467 => 184,  460 => 180,  455 => 178,  452 => 177,  447 => 176,  445 => 175,  442 => 174,  435 => 169,  430 => 167,  426 => 166,  423 => 165,  417 => 161,  412 => 159,  408 => 158,  405 => 157,  399 => 153,  394 => 151,  390 => 150,  387 => 149,  381 => 145,  376 => 143,  372 => 142,  369 => 141,  363 => 137,  358 => 135,  354 => 134,  351 => 133,  349 => 132,  342 => 128,  337 => 126,  333 => 125,  330 => 124,  324 => 121,  319 => 119,  315 => 118,  308 => 114,  303 => 112,  299 => 111,  296 => 110,  294 => 109,  291 => 108,  287 => 105,  284 => 103,  278 => 101,  276 => 100,  272 => 99,  268 => 98,  264 => 96,  257 => 92,  252 => 90,  248 => 89,  245 => 88,  239 => 84,  234 => 82,  230 => 81,  227 => 80,  221 => 76,  216 => 74,  212 => 73,  209 => 72,  206 => 71,  200 => 67,  195 => 65,  191 => 64,  187 => 62,  184 => 61,  179 => 58,  174 => 56,  169 => 55,  167 => 54,  161 => 51,  156 => 49,  151 => 48,  149 => 47,  147 => 46,  138 => 40,  132 => 38,  127 => 34,  121 => 32,  118 => 31,  104 => 29,  99 => 28,  97 => 27,  92 => 25,  84 => 20,  76 => 16,  74 => 15,  70 => 13,  61 => 12,  50 => 9,  41 => 8,  11 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
User: a49974
Date: 9/08/2017
 #}
{% extends \"ORGBirdBundle::layout.html.twig\" %}
{% trans_default_domain \"ORGBirdBundleCycleBook\" %}

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
                    <div class=\"well well-sm\">{{ 'form.cyclebook.image'|trans }}</div>
                    <div class=\"well well-sm\" style=\"cursor: zoom-in\" id=\"img_book\">
                        {% if imageroot.fullpath is null %}
                            {% image '@ORGBirdBundle/Resources/public/images/default-book.png'  %}
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
                        {% if iscycle %}
                            {# c'est un cycle#}
                            {{ form_label(form.cycle.title, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                            {{ form_errors(form.cycle.title) }}
                            <div class=\"col-sm-9\">
                                {{ form_widget(form.cycle.title, {'attr': {'class': 'form-control input-sm'}}) }}
                            </div>
                        {%  else %}
                            {# ce n'est pas un cycle#}
                            {{ form_label(form.title, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                            {{ form_errors(form.title) }}
                            <div class=\"col-sm-9\">
                                {{ form_widget(form.title, {'attr': {'class': 'form-control input-sm'}}) }}
                            </div>
                            {# -- #}
                        {% endif %}
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.cycle.authors, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                        {{ form_errors(form.cycle.authors) }}
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.cycle.authors, {'attr': {'class': 'form-control input-sm'}}) }}
                        </div>
                    </div>
                    {# si cycle affiche ici#}
                    {% if iscycle %}
                        <div class=\"form-group\">
                            {{ form_label(form.cycle.type, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                            {{ form_errors(form.cycle.type) }}
                            <div class=\"col-sm-9\">
                                {{ form_widget(form.cycle.type, {'attr': {'class': 'form-control input-sm'}}) }}
                            </div>
                        </div>
                        {# Champ nbrvolume#}
                        <div class=\"form-group\">
                            {{ form_label(form.cycle.nbrvolume, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                            {{ form_errors(form.cycle.nbrvolume) }}
                            <div class=\"col-sm-9\">
                                {{ form_widget(form.cycle.nbrvolume, {'attr': {'class': 'form-control input-sm'}}) }}
                            </div>
                        </div>
                        {# Champ comment#}
                        <div class=\"form-group\">
                            {{ form_label(form.cycle.comment, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                            {{ form_errors(form.cycle.comment) }}
                            <div class=\"col-sm-9\">
                                {{ form_widget(form.cycle.comment, {'attr': {'class': 'form-control input-sm'}}) }}
                            </div>
                        </div>
                    {% endif %}
                    <div style=\"margin-left: 20px; margin-bottom: 20px\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"  style=\"border: none\"><a href=\"#tab1default\" data-toggle=\"pill\">{{ 'form.cyclebook.tab.1'|trans }}</a></li>
                            <li  style=\"border: none\"><a href=\"#tab2default\" data-toggle=\"pill\">{{ 'form.cyclebook.tab.2'|trans }}</a></li>
                            {% if iscycle %}
                                <li  style=\"border: none\"><a href=\"#tab3default\" data-toggle=\"pill\">{{ 'form.cyclebook.tab.3'|trans }}</a></li>
                            {% endif %}
                        </ul>
                        {# Start TAB #}
                        <div style=\"border: #dddddd 2px solid; padding: 10px; \">
                            <div class=\"tab-content\" style=\"\">
                                {#Tab 1#}
                                <div class=\"tab-pane fade in active\" id=\"tab1default\">
                                    {% if iscycle %}
                                        <div class=\"form-group\">
                                            {{ form_label(form.title, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                                            {{ form_errors(form.title) }}
                                            <div class=\"col-sm-9\">
                                                {{ form_widget(form.title, {'attr': {'class': 'form-control input-sm'}}) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_label(form.volume, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                                            {{ form_errors(form.volume) }}
                                            <div class=\"col-sm-9\">
                                                {{ form_widget(form.volume, {'attr': {'class': 'form-control input-sm'}}) }}
                                            </div>
                                        </div>                                    {% else %}
                                        <div class=\"form-group\">
                                            {{ form_label(form.cycle.type, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                                            {{ form_errors(form.cycle.type) }}
                                            <div class=\"col-sm-9\">
                                                {{ form_widget(form.cycle.type, {'attr': {'class': 'form-control input-sm'}}) }}
                                            </div>
                                        </div>
                                    {% endif %}
                                    {# Champ collection#}
                                    <div class=\"form-group\">
                                        {{ form_label(form.collection, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                                        {{ form_errors(form.collection) }}
                                        <div class=\"col-sm-9\">
                                            {{ form_widget(form.collection, {'attr': {'class': 'form-control input-sm'}}) }}
                                        </div>
                                    </div>
                                    {# Champ editor#}
                                    <div class=\"form-group\">
                                        {{ form_label(form.editor, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                                        {{ form_errors(form.editor) }}
                                        <div class=\"col-sm-9\">
                                            {{ form_widget(form.editor, {'attr': {'class': 'form-control input-sm'}}) }}
                                        </div>
                                    </div>
                                    {# Champ presentation#}
                                    <div class=\"form-group\">
                                        {{ form_label(form.presentation, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                                        {{ form_errors(form.presentation) }}
                                        <div class=\"col-sm-9\">
                                            {{ form_widget(form.presentation, {'attr': {'class': 'form-control input-sm'}}) }}
                                        </div>
                                    </div>
                                    {# Champ format#}
                                    <div class=\"form-group\">
                                        {{ form_label(form.format, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                                        {{ form_errors(form.format) }}
                                        <div class=\"col-sm-9\">
                                            {{ form_widget(form.format, {'attr': {'class': 'form-control input-sm'}}) }}
                                        </div>
                                    </div>
                                    {# Champ isbn#}
                                    <div class=\"form-group\">
                                        {{ form_label(form.isbn, '',{'label_attr': {'class': 'col-sm-3 control-label small'}}) }}
                                        {{ form_errors(form.isbn) }}
                                        <div class=\"col-sm-9\">
                                            {{ form_widget(form.isbn, {'attr': {'class': 'form-control input-sm'}}) }}
                                        </div>
                                    </div>
                                </div>
                                {# TAB 2#}
                                <div class=\"tab-pane fade\" id=\"tab2default\">
                                    {% if form.linkfieldsbooks is defined %}
                                        {% for linkfield in form.linkfieldsbooks %}
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
                                    {% endif %}
                                </div>
                                {# TAB 3#}
                                {% if iscycle %}
                                    <div class=\"tab-pane fade\" id=\"tab3default\">
                                        {% if form.cycle.linkfieldscycles is defined %}
                                            {% for linkfield in form.cycle.linkfieldscycles %}
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
                                        {% endif %}
                                    </div>
                                {% endif %}
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
            options['language'] = 'fr';
            options['url'] = url;
            setup(options);
        });

    </script>
    {% javascripts '@ORGBirdBundle/Resources/public/js/bookForm.js' %}
    <script src=\"{{ asset_url }}\" type=\"text/javascript\"></script>
    {% endjavascripts %}
{% endblock %}", "ORGBirdBundle:CycleBook:FormBook.html.twig", "/var/www/bird/src/ORG/BirdBundle/Resources/views/CycleBook/FormBook.html.twig");
    }
}
