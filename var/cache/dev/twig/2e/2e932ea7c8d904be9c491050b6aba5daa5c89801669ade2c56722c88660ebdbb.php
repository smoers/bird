<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_94ecd9edab981f4443962ed047fd7b5e3a87995e727651764afde6d7385a3007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ORGBirdBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ORGBirdBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6225de5a46529f0bcc99caf0433d1db90a5960259e2046400d862bbeb69ed8c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6225de5a46529f0bcc99caf0433d1db90a5960259e2046400d862bbeb69ed8c6->enter($__internal_6225de5a46529f0bcc99caf0433d1db90a5960259e2046400d862bbeb69ed8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_25ea18a59593a1c5e86db58737451319e1347c12674b72a21e1f075fbfa633a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ea18a59593a1c5e86db58737451319e1347c12674b72a21e1f075fbfa633a4->enter($__internal_25ea18a59593a1c5e86db58737451319e1347c12674b72a21e1f075fbfa633a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6225de5a46529f0bcc99caf0433d1db90a5960259e2046400d862bbeb69ed8c6->leave($__internal_6225de5a46529f0bcc99caf0433d1db90a5960259e2046400d862bbeb69ed8c6_prof);

        
        $__internal_25ea18a59593a1c5e86db58737451319e1347c12674b72a21e1f075fbfa633a4->leave($__internal_25ea18a59593a1c5e86db58737451319e1347c12674b72a21e1f075fbfa633a4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9937a98d078158de3dd9dcd48cfe5d691aa6f50a8aa9a4d468bc5aaa465a81b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9937a98d078158de3dd9dcd48cfe5d691aa6f50a8aa9a4d468bc5aaa465a81b9->enter($__internal_9937a98d078158de3dd9dcd48cfe5d691aa6f50a8aa9a4d468bc5aaa465a81b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_07fee7ebf8c618228b1b0c839a49de9f09971cf2dc1ae5f2e46c2c41e48bcdfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07fee7ebf8c618228b1b0c839a49de9f09971cf2dc1ae5f2e46c2c41e48bcdfc->enter($__internal_07fee7ebf8c618228b1b0c839a49de9f09971cf2dc1ae5f2e46c2c41e48bcdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "ORGBirdBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_07fee7ebf8c618228b1b0c839a49de9f09971cf2dc1ae5f2e46c2c41e48bcdfc->leave($__internal_07fee7ebf8c618228b1b0c839a49de9f09971cf2dc1ae5f2e46c2c41e48bcdfc_prof);

        
        $__internal_9937a98d078158de3dd9dcd48cfe5d691aa6f50a8aa9a4d468bc5aaa465a81b9->leave($__internal_9937a98d078158de3dd9dcd48cfe5d691aa6f50a8aa9a4d468bc5aaa465a81b9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"ORGBirdBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('ORGBirdBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/bird/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
