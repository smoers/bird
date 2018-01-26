<?php

/* ::layout.html.twig */
class __TwigTemplate_ea48c04ae7759f3f6ac17b2496ca8fbffee71d0b4d88d12a866734ed44791057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2d011f2e7de22e76959e4138e60878f50141c80bc169d30946d83c3b0df5acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d011f2e7de22e76959e4138e60878f50141c80bc169d30946d83c3b0df5acd->enter($__internal_b2d011f2e7de22e76959e4138e60878f50141c80bc169d30946d83c3b0df5acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_66bbc7471194a1622a7176f9b1be2af3293d220af2f8b28eb78db6659ca208d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66bbc7471194a1622a7176f9b1be2af3293d220af2f8b28eb78db6659ca208d3->enter($__internal_66bbc7471194a1622a7176f9b1be2af3293d220af2f8b28eb78db6659ca208d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<!-- jQuery -->
\t\t<!-- <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script> --> 
\t\t<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\" integrity=\"sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=\" crossorigin=\"anonymous\"></script>
\t\t
\t\t<!-- easyui -->
\t\t<script type=\"text/javascript\" src=\"http://www.jeasyui.com/easyui/jquery.easyui.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"http://www.jeasyui.com/easyui/datagrid-detailview.js\"></script>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.jeasyui.com/easyui/themes/metro/easyui.css\">
    \t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.jeasyui.com/easyui/themes/icon.css\">
    \t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.jeasyui.com/easyui/themes/color.css\">

\t\t<!-- <link rel=\"stylesheet\" href=\"./lib/jquery-easyui-1.5.1/themes/icon.css\">
\t\t<link rel=\"stylesheet\" href=\"./lib/jquery-easyui-1.5.1/themes/bootstrap/easyui.css\"> -->
\t\t
      \t<!-- Font -->
      \t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t\t<!-- Bootstrap -->
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
\t\t<!-- Datepicker see http://bootstrap-datepicker.readthedocs.io-->
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" integrity=\"sha256-nFp4rgCvFsMQweFQwabbKfjrBwlaebbLkE29VFR0K40=\" crossorigin=\"anonymous\" />
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js\" integrity=\"sha256-urCxMaTtyuE8UK5XeVYuQbm/MhnXflqZ/B9AOkyTguo=\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.fr.min.js\" integrity=\"sha256-IRibTuqtDv2uUUN/0iTrhnrvvygNczxRRAbPgCbs+LE=\" crossorigin=\"anonymous\"></script>
\t\t<!-- Select2 -->
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css\" rel=\"stylesheet\" />
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js\"></script>

      <title>";
        // line 38
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
      ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "
      ";
        // line 45
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 51
        echo "    </head>
    ";
        // line 52
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cd31cf2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cd31cf2_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/cd31cf2_blue-sky_1.jpg");
            // line 53
            echo "    <body style=\"background-color: #d2f8ff\" background=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 53, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
    ";
        } else {
            // asset "cd31cf2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cd31cf2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/cd31cf2.jpg");
            echo "    <body style=\"background-color: #d2f8ff\" background=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 53, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
    ";
        }
        unset($context["asset_url"]);
        // line 55
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "
    </body>
</html>";
        
        $__internal_b2d011f2e7de22e76959e4138e60878f50141c80bc169d30946d83c3b0df5acd->leave($__internal_b2d011f2e7de22e76959e4138e60878f50141c80bc169d30946d83c3b0df5acd_prof);

        
        $__internal_66bbc7471194a1622a7176f9b1be2af3293d220af2f8b28eb78db6659ca208d3->leave($__internal_66bbc7471194a1622a7176f9b1be2af3293d220af2f8b28eb78db6659ca208d3_prof);

    }

    // line 38
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c5cdd9bd0d564fbce774b63383442b96d6bc74d5a6f9777bb7a4ba38dd830fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c5cdd9bd0d564fbce774b63383442b96d6bc74d5a6f9777bb7a4ba38dd830fb->enter($__internal_8c5cdd9bd0d564fbce774b63383442b96d6bc74d5a6f9777bb7a4ba38dd830fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef1e1094b65bb8b923c6602609e02cf78a8985916bd5545d5f84be2c02c7e348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1e1094b65bb8b923c6602609e02cf78a8985916bd5545d5f84be2c02c7e348->enter($__internal_ef1e1094b65bb8b923c6602609e02cf78a8985916bd5545d5f84be2c02c7e348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bird Web";
        
        $__internal_ef1e1094b65bb8b923c6602609e02cf78a8985916bd5545d5f84be2c02c7e348->leave($__internal_ef1e1094b65bb8b923c6602609e02cf78a8985916bd5545d5f84be2c02c7e348_prof);

        
        $__internal_8c5cdd9bd0d564fbce774b63383442b96d6bc74d5a6f9777bb7a4ba38dd830fb->leave($__internal_8c5cdd9bd0d564fbce774b63383442b96d6bc74d5a6f9777bb7a4ba38dd830fb_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0417acd3c31ca728041be741efb23670697f86eae911c3a58e29694922dffc5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0417acd3c31ca728041be741efb23670697f86eae911c3a58e29694922dffc5e->enter($__internal_0417acd3c31ca728041be741efb23670697f86eae911c3a58e29694922dffc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e02adb3c1ab5430ccf619b5640828c8649ed2886f69e3c355538423f9d141a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02adb3c1ab5430ccf619b5640828c8649ed2886f69e3c355538423f9d141a6b->enter($__internal_e02adb3c1ab5430ccf619b5640828c8649ed2886f69e3c355538423f9d141a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "          ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9b5c281_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9b5c281_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/9b5c281_Modal.class_1.js");
            // line 41
            echo "\t\t  <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 41, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
          ";
        } else {
            // asset "9b5c281"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9b5c281") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/9b5c281.js");
            echo "\t\t  <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 41, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
          ";
        }
        unset($context["asset_url"]);
        // line 43
        echo "      ";
        
        $__internal_e02adb3c1ab5430ccf619b5640828c8649ed2886f69e3c355538423f9d141a6b->leave($__internal_e02adb3c1ab5430ccf619b5640828c8649ed2886f69e3c355538423f9d141a6b_prof);

        
        $__internal_0417acd3c31ca728041be741efb23670697f86eae911c3a58e29694922dffc5e->leave($__internal_0417acd3c31ca728041be741efb23670697f86eae911c3a58e29694922dffc5e_prof);

    }

    // line 45
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2925f4f22d65db346379104986745e425047e9b1e114f88e0c1195702aa0a224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2925f4f22d65db346379104986745e425047e9b1e114f88e0c1195702aa0a224->enter($__internal_2925f4f22d65db346379104986745e425047e9b1e114f88e0c1195702aa0a224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2ec8930511a5fda2009e7c15a121e5afbe9c54b62eaf8ad0a9a5cc40555e470a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec8930511a5fda2009e7c15a121e5afbe9c54b62eaf8ad0a9a5cc40555e470a->enter($__internal_2ec8930511a5fda2009e7c15a121e5afbe9c54b62eaf8ad0a9a5cc40555e470a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 46
        echo "\t\t  ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "602a79f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_602a79f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/602a79f_bird_1.css");
            // line 47
            echo "\t\t  \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 47, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
\t\t  ";
        } else {
            // asset "602a79f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_602a79f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/602a79f.css");
            echo "\t\t  \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 47, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
\t\t  ";
        }
        unset($context["asset_url"]);
        // line 49
        echo "
      ";
        
        $__internal_2ec8930511a5fda2009e7c15a121e5afbe9c54b62eaf8ad0a9a5cc40555e470a->leave($__internal_2ec8930511a5fda2009e7c15a121e5afbe9c54b62eaf8ad0a9a5cc40555e470a_prof);

        
        $__internal_2925f4f22d65db346379104986745e425047e9b1e114f88e0c1195702aa0a224->leave($__internal_2925f4f22d65db346379104986745e425047e9b1e114f88e0c1195702aa0a224_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce590bf0c945a247698ed0809cdd57d9970e49d202d4f0d60ea951ada028c581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce590bf0c945a247698ed0809cdd57d9970e49d202d4f0d60ea951ada028c581->enter($__internal_ce590bf0c945a247698ed0809cdd57d9970e49d202d4f0d60ea951ada028c581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d74dbc7225ba14b379488d4db02c8ee8a5f46bb7881834c597694caadd40931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d74dbc7225ba14b379488d4db02c8ee8a5f46bb7881834c597694caadd40931->enter($__internal_3d74dbc7225ba14b379488d4db02c8ee8a5f46bb7881834c597694caadd40931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "        ";
        
        $__internal_3d74dbc7225ba14b379488d4db02c8ee8a5f46bb7881834c597694caadd40931->leave($__internal_3d74dbc7225ba14b379488d4db02c8ee8a5f46bb7881834c597694caadd40931_prof);

        
        $__internal_ce590bf0c945a247698ed0809cdd57d9970e49d202d4f0d60ea951ada028c581->leave($__internal_ce590bf0c945a247698ed0809cdd57d9970e49d202d4f0d60ea951ada028c581_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 56,  209 => 55,  198 => 49,  184 => 47,  179 => 46,  170 => 45,  160 => 43,  146 => 41,  141 => 40,  132 => 39,  114 => 38,  102 => 57,  99 => 55,  85 => 53,  81 => 52,  78 => 51,  76 => 45,  73 => 44,  71 => 39,  67 => 38,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
    <head>
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<!-- jQuery -->
\t\t<!-- <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script> --> 
\t\t<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\" integrity=\"sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=\" crossorigin=\"anonymous\"></script>
\t\t
\t\t<!-- easyui -->
\t\t<script type=\"text/javascript\" src=\"http://www.jeasyui.com/easyui/jquery.easyui.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"http://www.jeasyui.com/easyui/datagrid-detailview.js\"></script>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.jeasyui.com/easyui/themes/metro/easyui.css\">
    \t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.jeasyui.com/easyui/themes/icon.css\">
    \t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.jeasyui.com/easyui/themes/color.css\">

\t\t<!-- <link rel=\"stylesheet\" href=\"./lib/jquery-easyui-1.5.1/themes/icon.css\">
\t\t<link rel=\"stylesheet\" href=\"./lib/jquery-easyui-1.5.1/themes/bootstrap/easyui.css\"> -->
\t\t
      \t<!-- Font -->
      \t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t\t<!-- Bootstrap -->
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
\t\t<!-- Datepicker see http://bootstrap-datepicker.readthedocs.io-->
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" integrity=\"sha256-nFp4rgCvFsMQweFQwabbKfjrBwlaebbLkE29VFR0K40=\" crossorigin=\"anonymous\" />
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js\" integrity=\"sha256-urCxMaTtyuE8UK5XeVYuQbm/MhnXflqZ/B9AOkyTguo=\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.fr.min.js\" integrity=\"sha256-IRibTuqtDv2uUUN/0iTrhnrvvygNczxRRAbPgCbs+LE=\" crossorigin=\"anonymous\"></script>
\t\t<!-- Select2 -->
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css\" rel=\"stylesheet\" />
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js\"></script>

      <title>{% block title %}Bird Web{% endblock %}</title>
      {% block javascripts %}
          {% javascripts '@ORGBirdBundle/Resources/public/js/Modal.class.js' %}
\t\t  <script src=\"{{ asset_url }}\" type=\"text/javascript\"></script>
          {% endjavascripts %}
      {% endblock %}

      {% block stylesheets %}
\t\t  {% stylesheets 'bundles/orgbird/css/bird.css' filter='cssrewrite' %}
\t\t  \t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset_url }}\">
\t\t  {% endstylesheets %}

      {% endblock %}
    </head>
    {% image '@ORGBirdBundle/Resources/public/images/blue-sky.jpg' %}
    <body style=\"background-color: #d2f8ff\" background=\"{{ asset_url }}\">
    {% endimage %}
        {% block body %}
        {% endblock %}

    </body>
</html>", "::layout.html.twig", "/var/www/bird/app/Resources/views/layout.html.twig");
    }
}
