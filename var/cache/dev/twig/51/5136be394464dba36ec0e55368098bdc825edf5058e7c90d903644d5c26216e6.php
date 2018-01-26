<?php

/* ORGBirdBundle:Form:form_errors.html.twig */
class __TwigTemplate_2f851d099b767f54efff1dd07124c1749a63945023ea7a67585e5fd827593925 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5acfd0446911fada38ea6e85877ce9d8461ad0ea49f10230b35f1e9fe0de62ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5acfd0446911fada38ea6e85877ce9d8461ad0ea49f10230b35f1e9fe0de62ac->enter($__internal_5acfd0446911fada38ea6e85877ce9d8461ad0ea49f10230b35f1e9fe0de62ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ORGBirdBundle:Form:form_errors.html.twig"));

        $__internal_e75057f06a02b855e692241dd4c7c10d0b16e878e540521626988ca7f9c081ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75057f06a02b855e692241dd4c7c10d0b16e878e540521626988ca7f9c081ed->enter($__internal_e75057f06a02b855e692241dd4c7c10d0b16e878e540521626988ca7f9c081ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ORGBirdBundle:Form:form_errors.html.twig"));

        // line 5
        echo "
";
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_5acfd0446911fada38ea6e85877ce9d8461ad0ea49f10230b35f1e9fe0de62ac->leave($__internal_5acfd0446911fada38ea6e85877ce9d8461ad0ea49f10230b35f1e9fe0de62ac_prof);

        
        $__internal_e75057f06a02b855e692241dd4c7c10d0b16e878e540521626988ca7f9c081ed->leave($__internal_e75057f06a02b855e692241dd4c7c10d0b16e878e540521626988ca7f9c081ed_prof);

    }

    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2881efd8adedea19d5765c544945a091525c365eda3581931548188af3c4dabe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2881efd8adedea19d5765c544945a091525c365eda3581931548188af3c4dabe->enter($__internal_2881efd8adedea19d5765c544945a091525c365eda3581931548188af3c4dabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_07b88a3ea148c77503be9fc9761b11cc92c25aaaa68f0cae22433855ee51d09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b88a3ea148c77503be9fc9761b11cc92c25aaaa68f0cae22433855ee51d09d->enter($__internal_07b88a3ea148c77503be9fc9761b11cc92c25aaaa68f0cae22433855ee51d09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 10, $this->getSourceContext()); })())) > 0)) {
            // line 11
            echo "            <ul>
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 12, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 13
                echo "                    <div class=\"alert alert-warning fade-in\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.warning", array(), "BirdBundleCommon"), "html", null, true);
                echo " !   </strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "origin", array()), "config", array()), "attributes", array()), "data_collector/passed_options", array(), "array"), "label", array(), "array"), array(), "BirdBundleAuthor"), "html", null, true);
                echo " \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "messageParameters", array()), "{{ value }}", array(), "array"), "html", null, true);
                echo "\"  ::  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            </ul>
        ";
        }
        // line 20
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_07b88a3ea148c77503be9fc9761b11cc92c25aaaa68f0cae22433855ee51d09d->leave($__internal_07b88a3ea148c77503be9fc9761b11cc92c25aaaa68f0cae22433855ee51d09d_prof);

        
        $__internal_2881efd8adedea19d5765c544945a091525c365eda3581931548188af3c4dabe->leave($__internal_2881efd8adedea19d5765c544945a091525c365eda3581931548188af3c4dabe_prof);

    }

    public function getTemplateName()
    {
        return "ORGBirdBundle:Form:form_errors.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  82 => 18,  67 => 15,  63 => 13,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  32 => 8,  29 => 7,  26 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
User: a49974
Date: 22/06/2017
 #}

{% trans_default_domain \"BirdBundleCommon\" %}

{% block form_errors %}
    {% spaceless %}
        {% if errors|length > 0 %}
            <ul>
                {% for error in errors %}
                    <div class=\"alert alert-warning fade-in\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>{{ 'message.warning'|trans }} !   </strong>{{ error.origin.config.attributes['data_collector/passed_options']['label']|trans({},'BirdBundleAuthor') }} \"{{ error.messageParameters['{{ value }}'] }}\"  ::  {{ error.message }}
                    </div>
                {% endfor %}
            </ul>
        {% endif %}
    {% endspaceless %}
{% endblock form_errors %}", "ORGBirdBundle:Form:form_errors.html.twig", "/var/www/bird/src/ORG/BirdBundle/Resources/views/Form/form_errors.html.twig");
    }
}
