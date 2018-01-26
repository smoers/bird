<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5b554b2451d8f1f4c9e2131ff26e174bab241854101249293e22f86b4a91e3c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_204006eade55b1f4134431f43cdb559e29752f5323af1c9d2013652d9d974314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204006eade55b1f4134431f43cdb559e29752f5323af1c9d2013652d9d974314->enter($__internal_204006eade55b1f4134431f43cdb559e29752f5323af1c9d2013652d9d974314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8ba3c3b9e374109f3487460c4785bcd5f5b5eb7aed9bbc53c134d82c42b702db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba3c3b9e374109f3487460c4785bcd5f5b5eb7aed9bbc53c134d82c42b702db->enter($__internal_8ba3c3b9e374109f3487460c4785bcd5f5b5eb7aed9bbc53c134d82c42b702db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_204006eade55b1f4134431f43cdb559e29752f5323af1c9d2013652d9d974314->leave($__internal_204006eade55b1f4134431f43cdb559e29752f5323af1c9d2013652d9d974314_prof);

        
        $__internal_8ba3c3b9e374109f3487460c4785bcd5f5b5eb7aed9bbc53c134d82c42b702db->leave($__internal_8ba3c3b9e374109f3487460c4785bcd5f5b5eb7aed9bbc53c134d82c42b702db_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8a692f2fcab0bb02055e20a8d4f43619cc7409177552e0181af37344f5bc0ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a692f2fcab0bb02055e20a8d4f43619cc7409177552e0181af37344f5bc0ce->enter($__internal_b8a692f2fcab0bb02055e20a8d4f43619cc7409177552e0181af37344f5bc0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6700a77d704f2d5d1d6bace55eca6368577fd8b8b7ecd76ada080c1898370640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6700a77d704f2d5d1d6bace55eca6368577fd8b8b7ecd76ada080c1898370640->enter($__internal_6700a77d704f2d5d1d6bace55eca6368577fd8b8b7ecd76ada080c1898370640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6700a77d704f2d5d1d6bace55eca6368577fd8b8b7ecd76ada080c1898370640->leave($__internal_6700a77d704f2d5d1d6bace55eca6368577fd8b8b7ecd76ada080c1898370640_prof);

        
        $__internal_b8a692f2fcab0bb02055e20a8d4f43619cc7409177552e0181af37344f5bc0ce->leave($__internal_b8a692f2fcab0bb02055e20a8d4f43619cc7409177552e0181af37344f5bc0ce_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d01c6dac713acbb8ae315e8185dec491f1502dcfbac4ceed10d332539e6e9d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01c6dac713acbb8ae315e8185dec491f1502dcfbac4ceed10d332539e6e9d43->enter($__internal_d01c6dac713acbb8ae315e8185dec491f1502dcfbac4ceed10d332539e6e9d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c3d3325cbe22f3804f6b7ec45459b1b3d920f126d06b2985cb29e086d49717bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d3325cbe22f3804f6b7ec45459b1b3d920f126d06b2985cb29e086d49717bf->enter($__internal_c3d3325cbe22f3804f6b7ec45459b1b3d920f126d06b2985cb29e086d49717bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c3d3325cbe22f3804f6b7ec45459b1b3d920f126d06b2985cb29e086d49717bf->leave($__internal_c3d3325cbe22f3804f6b7ec45459b1b3d920f126d06b2985cb29e086d49717bf_prof);

        
        $__internal_d01c6dac713acbb8ae315e8185dec491f1502dcfbac4ceed10d332539e6e9d43->leave($__internal_d01c6dac713acbb8ae315e8185dec491f1502dcfbac4ceed10d332539e6e9d43_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_de28ed3d2adedae46100c4a8c0afbcc8cc0bf9cc36c70bf744f3d02576177231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de28ed3d2adedae46100c4a8c0afbcc8cc0bf9cc36c70bf744f3d02576177231->enter($__internal_de28ed3d2adedae46100c4a8c0afbcc8cc0bf9cc36c70bf744f3d02576177231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2556ae876f37c53a6c43ff13d7134d30637c3977cc3ec6d36bcfd2923c3f303f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2556ae876f37c53a6c43ff13d7134d30637c3977cc3ec6d36bcfd2923c3f303f->enter($__internal_2556ae876f37c53a6c43ff13d7134d30637c3977cc3ec6d36bcfd2923c3f303f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2556ae876f37c53a6c43ff13d7134d30637c3977cc3ec6d36bcfd2923c3f303f->leave($__internal_2556ae876f37c53a6c43ff13d7134d30637c3977cc3ec6d36bcfd2923c3f303f_prof);

        
        $__internal_de28ed3d2adedae46100c4a8c0afbcc8cc0bf9cc36c70bf744f3d02576177231->leave($__internal_de28ed3d2adedae46100c4a8c0afbcc8cc0bf9cc36c70bf744f3d02576177231_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/bird/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
