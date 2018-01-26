<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f680ee6ea4e66336aef94ee7a0c74cb2d9c22302366ef42a1b567818f3f0fb4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_5c48816581d759d90b9a428600b976241fe02e797554b747318742f32cef153d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c48816581d759d90b9a428600b976241fe02e797554b747318742f32cef153d->enter($__internal_5c48816581d759d90b9a428600b976241fe02e797554b747318742f32cef153d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6adeacef2173f1d49db6e4b6847a641f28bc221b48413f5c05d575efd5b4d4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6adeacef2173f1d49db6e4b6847a641f28bc221b48413f5c05d575efd5b4d4da->enter($__internal_6adeacef2173f1d49db6e4b6847a641f28bc221b48413f5c05d575efd5b4d4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c48816581d759d90b9a428600b976241fe02e797554b747318742f32cef153d->leave($__internal_5c48816581d759d90b9a428600b976241fe02e797554b747318742f32cef153d_prof);

        
        $__internal_6adeacef2173f1d49db6e4b6847a641f28bc221b48413f5c05d575efd5b4d4da->leave($__internal_6adeacef2173f1d49db6e4b6847a641f28bc221b48413f5c05d575efd5b4d4da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_96347e24e951eaaebc1e8b6b48e1af695945bb9fe8fa2f8300e476bb06949c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96347e24e951eaaebc1e8b6b48e1af695945bb9fe8fa2f8300e476bb06949c4f->enter($__internal_96347e24e951eaaebc1e8b6b48e1af695945bb9fe8fa2f8300e476bb06949c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fe70340673578f15fc7bd5569d40b2001b8301188d592badf7bf24d2aa2a7220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe70340673578f15fc7bd5569d40b2001b8301188d592badf7bf24d2aa2a7220->enter($__internal_fe70340673578f15fc7bd5569d40b2001b8301188d592badf7bf24d2aa2a7220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe70340673578f15fc7bd5569d40b2001b8301188d592badf7bf24d2aa2a7220->leave($__internal_fe70340673578f15fc7bd5569d40b2001b8301188d592badf7bf24d2aa2a7220_prof);

        
        $__internal_96347e24e951eaaebc1e8b6b48e1af695945bb9fe8fa2f8300e476bb06949c4f->leave($__internal_96347e24e951eaaebc1e8b6b48e1af695945bb9fe8fa2f8300e476bb06949c4f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3ac7c3be9910849020096b955216b71aac65d73e04a1cdd27b9035be0353e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ac7c3be9910849020096b955216b71aac65d73e04a1cdd27b9035be0353e28->enter($__internal_b3ac7c3be9910849020096b955216b71aac65d73e04a1cdd27b9035be0353e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d110336ca8bed5a55399d6930f0bed82f72b2e528060fe5724f04aac51c81c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d110336ca8bed5a55399d6930f0bed82f72b2e528060fe5724f04aac51c81c28->enter($__internal_d110336ca8bed5a55399d6930f0bed82f72b2e528060fe5724f04aac51c81c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d110336ca8bed5a55399d6930f0bed82f72b2e528060fe5724f04aac51c81c28->leave($__internal_d110336ca8bed5a55399d6930f0bed82f72b2e528060fe5724f04aac51c81c28_prof);

        
        $__internal_b3ac7c3be9910849020096b955216b71aac65d73e04a1cdd27b9035be0353e28->leave($__internal_b3ac7c3be9910849020096b955216b71aac65d73e04a1cdd27b9035be0353e28_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b083df83b9801490e9735e3fc0d9380c93cb13fa8fbf386ba5f50bcc739f7d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b083df83b9801490e9735e3fc0d9380c93cb13fa8fbf386ba5f50bcc739f7d0f->enter($__internal_b083df83b9801490e9735e3fc0d9380c93cb13fa8fbf386ba5f50bcc739f7d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f90d38fdc833dfcbede3cbda8a89f2b06f8f4591268296b754b0dc48b0c6059a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90d38fdc833dfcbede3cbda8a89f2b06f8f4591268296b754b0dc48b0c6059a->enter($__internal_f90d38fdc833dfcbede3cbda8a89f2b06f8f4591268296b754b0dc48b0c6059a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f90d38fdc833dfcbede3cbda8a89f2b06f8f4591268296b754b0dc48b0c6059a->leave($__internal_f90d38fdc833dfcbede3cbda8a89f2b06f8f4591268296b754b0dc48b0c6059a_prof);

        
        $__internal_b083df83b9801490e9735e3fc0d9380c93cb13fa8fbf386ba5f50bcc739f7d0f->leave($__internal_b083df83b9801490e9735e3fc0d9380c93cb13fa8fbf386ba5f50bcc739f7d0f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/bird/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
