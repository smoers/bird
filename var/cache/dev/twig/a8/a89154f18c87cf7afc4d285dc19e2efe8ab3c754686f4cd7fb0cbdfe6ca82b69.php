<?php

/* ORGBirdBundle:Security:login_content.html.twig */
class __TwigTemplate_520382cb1942fef2ca3eeb85f532e9c396a15d5ddaf93e44413bfa2a165dbd00 extends Twig_Template
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
        $__internal_c1af9efc87f37d960404a67e29222a6327a1fb67eb2a335a0ac69a08e1be891b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1af9efc87f37d960404a67e29222a6327a1fb67eb2a335a0ac69a08e1be891b->enter($__internal_c1af9efc87f37d960404a67e29222a6327a1fb67eb2a335a0ac69a08e1be891b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ORGBirdBundle:Security:login_content.html.twig"));

        $__internal_fb80623ccb602940c33039fd192c85a9817cb3b3b461cd6d3d8e073f23d67be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb80623ccb602940c33039fd192c85a9817cb3b3b461cd6d3d8e073f23d67be4->enter($__internal_fb80623ccb602940c33039fd192c85a9817cb3b3b461cd6d3d8e073f23d67be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ORGBirdBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<div class=\"container\" style=\"margin-top: 5%;\">
\t<div class=\"col-md-4 col-md-offset-4\">
\t\t<div class=\"panel\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c73a5ab_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c73a5ab_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c73a5ab_logo_1.png");
            // line 11
            echo "     \t\t\t<img alt=\"Bird Web\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
     \t\t    ";
        } else {
            // asset "c73a5ab"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c73a5ab") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c73a5ab.png");
            echo "     \t\t\t<img alt=\"Bird Web\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
     \t\t    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "\t\t\t</div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    ";
        // line 16
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 16, $this->getSourceContext()); })())) {
            // line 17
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
                    ";
        }
        // line 19
        echo "                \t<div class=\"form-group row\">
                \t\t<div class=\"col-xs-12\">
                \t\t\t<div class=\"input-group\">
                            \t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                \t\t\t\t<input placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"form-control input-sm\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" />
                \t\t\t</div>
                \t\t</div>
                \t</div>
                \t
                \t<div class=\"form-group row\">
                    \t<div class=\"col-xs-12\">
                    \t\t<div class=\"input-group\">
                    \t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                \t\t    \t<input placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\"  class=\"form-control input-sm\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                \t\t    </div>
                    \t</div>
                \t</div>\t
                \t<div class=\"form-group row\">
                \t    <label for=\"remember_me\" class=\"col-2 col-form-label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    \t<div class=\"col-sm-2 form-check\">
                           \t<input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                \t\t</div>
                    </div>
                    <button class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-log-in\"></i></button>
                </form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_c1af9efc87f37d960404a67e29222a6327a1fb67eb2a335a0ac69a08e1be891b->leave($__internal_c1af9efc87f37d960404a67e29222a6327a1fb67eb2a335a0ac69a08e1be891b_prof);

        
        $__internal_fb80623ccb602940c33039fd192c85a9817cb3b3b461cd6d3d8e073f23d67be4->leave($__internal_fb80623ccb602940c33039fd192c85a9817cb3b3b461cd6d3d8e073f23d67be4_prof);

    }

    public function getTemplateName()
    {
        return "ORGBirdBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 42,  104 => 37,  96 => 32,  82 => 23,  76 => 19,  70 => 17,  68 => 16,  64 => 15,  60 => 13,  46 => 11,  42 => 10,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"container\" style=\"margin-top: 5%;\">
\t<div class=\"col-md-4 col-md-offset-4\">
\t\t<div class=\"panel\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t{% image '@ORGBirdBundle/Resources/public/images/logo.png' %}
     \t\t\t<img alt=\"Bird Web\" src=\"{{ asset_url }}\">
     \t\t    {% endimage %}
\t\t\t</div>
            <div class=\"panel-body\">
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                    {% if csrf_token %}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                    {% endif %}
                \t<div class=\"form-group row\">
                \t\t<div class=\"col-xs-12\">
                \t\t\t<div class=\"input-group\">
                            \t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                \t\t\t\t<input placeholder=\"{{ 'security.login.username'|trans }}\" class=\"form-control input-sm\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                \t\t\t</div>
                \t\t</div>
                \t</div>
                \t
                \t<div class=\"form-group row\">
                    \t<div class=\"col-xs-12\">
                    \t\t<div class=\"input-group\">
                    \t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                \t\t    \t<input placeholder=\"{{ 'security.login.password'|trans }}\"  class=\"form-control input-sm\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                \t\t    </div>
                    \t</div>
                \t</div>\t
                \t<div class=\"form-group row\">
                \t    <label for=\"remember_me\" class=\"col-2 col-form-label\">{{ 'security.login.remember_me'|trans }}</label>
                    \t<div class=\"col-sm-2 form-check\">
                           \t<input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                \t\t</div>
                    </div>
                    <button class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\">{{ 'security.login.submit'|trans }} <i class=\"glyphicon glyphicon-log-in\"></i></button>
                </form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "ORGBirdBundle:Security:login_content.html.twig", "/var/www/bird/src/ORG/BirdBundle/Resources/views/Security/login_content.html.twig");
    }
}
