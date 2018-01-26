<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7cbe89159141b689613ae473f588cd986ce4a9e8530d58a0bdc81dc9fc7896d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_605667b636deecc1a94abe6f331a6383fea424c486e31fd771e5f825baf0bde4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_605667b636deecc1a94abe6f331a6383fea424c486e31fd771e5f825baf0bde4->enter($__internal_605667b636deecc1a94abe6f331a6383fea424c486e31fd771e5f825baf0bde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0b278aa491705692d1853c0569f689f2d371197c876102144266cc55dd9d8e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b278aa491705692d1853c0569f689f2d371197c876102144266cc55dd9d8e81->enter($__internal_0b278aa491705692d1853c0569f689f2d371197c876102144266cc55dd9d8e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_605667b636deecc1a94abe6f331a6383fea424c486e31fd771e5f825baf0bde4->leave($__internal_605667b636deecc1a94abe6f331a6383fea424c486e31fd771e5f825baf0bde4_prof);

        
        $__internal_0b278aa491705692d1853c0569f689f2d371197c876102144266cc55dd9d8e81->leave($__internal_0b278aa491705692d1853c0569f689f2d371197c876102144266cc55dd9d8e81_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_55fe601b746e770f654a050b0f1f1384bfd01d13d18f2ff18a9984d5fcdcaecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55fe601b746e770f654a050b0f1f1384bfd01d13d18f2ff18a9984d5fcdcaecd->enter($__internal_55fe601b746e770f654a050b0f1f1384bfd01d13d18f2ff18a9984d5fcdcaecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b6a0db19a3df3a708c82f20c10fd815ac5c73f8957415139da7d23999a1bdf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a0db19a3df3a708c82f20c10fd815ac5c73f8957415139da7d23999a1bdf36->enter($__internal_b6a0db19a3df3a708c82f20c10fd815ac5c73f8957415139da7d23999a1bdf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b6a0db19a3df3a708c82f20c10fd815ac5c73f8957415139da7d23999a1bdf36->leave($__internal_b6a0db19a3df3a708c82f20c10fd815ac5c73f8957415139da7d23999a1bdf36_prof);

        
        $__internal_55fe601b746e770f654a050b0f1f1384bfd01d13d18f2ff18a9984d5fcdcaecd->leave($__internal_55fe601b746e770f654a050b0f1f1384bfd01d13d18f2ff18a9984d5fcdcaecd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/bird/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
