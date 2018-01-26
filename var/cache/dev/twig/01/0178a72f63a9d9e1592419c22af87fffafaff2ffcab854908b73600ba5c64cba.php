<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7a680ee82bf589b563e86fd1a0191c83fadfb700ff0de184692f045a4818c6db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05ca1461e8b86a430af4ebc11316e7ffda1aeb58e712c6ab6c90eef1adbed091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ca1461e8b86a430af4ebc11316e7ffda1aeb58e712c6ab6c90eef1adbed091->enter($__internal_05ca1461e8b86a430af4ebc11316e7ffda1aeb58e712c6ab6c90eef1adbed091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_eebc703e95ccbc7011c53f588f8e44c40186948081ea176a4b58db6f2b14a23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebc703e95ccbc7011c53f588f8e44c40186948081ea176a4b58db6f2b14a23f->enter($__internal_eebc703e95ccbc7011c53f588f8e44c40186948081ea176a4b58db6f2b14a23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05ca1461e8b86a430af4ebc11316e7ffda1aeb58e712c6ab6c90eef1adbed091->leave($__internal_05ca1461e8b86a430af4ebc11316e7ffda1aeb58e712c6ab6c90eef1adbed091_prof);

        
        $__internal_eebc703e95ccbc7011c53f588f8e44c40186948081ea176a4b58db6f2b14a23f->leave($__internal_eebc703e95ccbc7011c53f588f8e44c40186948081ea176a4b58db6f2b14a23f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5302feca3cf4e9d4d071bdc3eb2c3dbf03e7d1a99a21344a00614a744d8d60c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5302feca3cf4e9d4d071bdc3eb2c3dbf03e7d1a99a21344a00614a744d8d60c8->enter($__internal_5302feca3cf4e9d4d071bdc3eb2c3dbf03e7d1a99a21344a00614a744d8d60c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c8201128ebd576b7ee114cef7e18de84484e199363be7a6c6b6e27ed88d58df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8201128ebd576b7ee114cef7e18de84484e199363be7a6c6b6e27ed88d58df3->enter($__internal_c8201128ebd576b7ee114cef7e18de84484e199363be7a6c6b6e27ed88d58df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c8201128ebd576b7ee114cef7e18de84484e199363be7a6c6b6e27ed88d58df3->leave($__internal_c8201128ebd576b7ee114cef7e18de84484e199363be7a6c6b6e27ed88d58df3_prof);

        
        $__internal_5302feca3cf4e9d4d071bdc3eb2c3dbf03e7d1a99a21344a00614a744d8d60c8->leave($__internal_5302feca3cf4e9d4d071bdc3eb2c3dbf03e7d1a99a21344a00614a744d8d60c8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24e8d45ed7acfe8fd5baa5e1b1dd95b10b0ea096a2884d85cb7033ddb5242570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e8d45ed7acfe8fd5baa5e1b1dd95b10b0ea096a2884d85cb7033ddb5242570->enter($__internal_24e8d45ed7acfe8fd5baa5e1b1dd95b10b0ea096a2884d85cb7033ddb5242570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ff0259fce422410260d6c4a3568595db9f612ee42510993a03fbe892c4818936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff0259fce422410260d6c4a3568595db9f612ee42510993a03fbe892c4818936->enter($__internal_ff0259fce422410260d6c4a3568595db9f612ee42510993a03fbe892c4818936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ff0259fce422410260d6c4a3568595db9f612ee42510993a03fbe892c4818936->leave($__internal_ff0259fce422410260d6c4a3568595db9f612ee42510993a03fbe892c4818936_prof);

        
        $__internal_24e8d45ed7acfe8fd5baa5e1b1dd95b10b0ea096a2884d85cb7033ddb5242570->leave($__internal_24e8d45ed7acfe8fd5baa5e1b1dd95b10b0ea096a2884d85cb7033ddb5242570_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66fb003c6a1a1786a55007b0ab20ab65970e81514700484d6dfbc2f203adf486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66fb003c6a1a1786a55007b0ab20ab65970e81514700484d6dfbc2f203adf486->enter($__internal_66fb003c6a1a1786a55007b0ab20ab65970e81514700484d6dfbc2f203adf486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6e6eec6d4ac6db22ea67f05c18e94a0f5e660cc5ba9e34154af6c56d8b194c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6eec6d4ac6db22ea67f05c18e94a0f5e660cc5ba9e34154af6c56d8b194c1b->enter($__internal_6e6eec6d4ac6db22ea67f05c18e94a0f5e660cc5ba9e34154af6c56d8b194c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_6e6eec6d4ac6db22ea67f05c18e94a0f5e660cc5ba9e34154af6c56d8b194c1b->leave($__internal_6e6eec6d4ac6db22ea67f05c18e94a0f5e660cc5ba9e34154af6c56d8b194c1b_prof);

        
        $__internal_66fb003c6a1a1786a55007b0ab20ab65970e81514700484d6dfbc2f203adf486->leave($__internal_66fb003c6a1a1786a55007b0ab20ab65970e81514700484d6dfbc2f203adf486_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/bird/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
