<?php

/* ORGBirdBundle::layout.html.twig */
class __TwigTemplate_624b3940135b368fc2c27efc63201ea95bb5cc8938d745171956ae9df2de227b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ORGBirdBundle::layout.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'bird_title_notice' => array($this, 'block_bird_title_notice'),
            'page_title' => array($this, 'block_page_title'),
            'bird_body' => array($this, 'block_bird_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df6e10ca44d7e383e2054ba89e3cac4fac861f3d4732e93dc4e438d96f7f42b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6e10ca44d7e383e2054ba89e3cac4fac861f3d4732e93dc4e438d96f7f42b5->enter($__internal_df6e10ca44d7e383e2054ba89e3cac4fac861f3d4732e93dc4e438d96f7f42b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ORGBirdBundle::layout.html.twig"));

        $__internal_29914e93f957c52c96c3a6ae1e1e08a455b7ceba187663b630f9479008ad2c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29914e93f957c52c96c3a6ae1e1e08a455b7ceba187663b630f9479008ad2c72->enter($__internal_29914e93f957c52c96c3a6ae1e1e08a455b7ceba187663b630f9479008ad2c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ORGBirdBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df6e10ca44d7e383e2054ba89e3cac4fac861f3d4732e93dc4e438d96f7f42b5->leave($__internal_df6e10ca44d7e383e2054ba89e3cac4fac861f3d4732e93dc4e438d96f7f42b5_prof);

        
        $__internal_29914e93f957c52c96c3a6ae1e1e08a455b7ceba187663b630f9479008ad2c72->leave($__internal_29914e93f957c52c96c3a6ae1e1e08a455b7ceba187663b630f9479008ad2c72_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_703eb75ca9c838bb91bdd753adead805224369ae4f4417d883bdf82c0319bf87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703eb75ca9c838bb91bdd753adead805224369ae4f4417d883bdf82c0319bf87->enter($__internal_703eb75ca9c838bb91bdd753adead805224369ae4f4417d883bdf82c0319bf87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_de3719c3ada5ea26e2f120f8ac93af52a6358eccf9246d072b474c7db128beda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3719c3ada5ea26e2f120f8ac93af52a6358eccf9246d072b474c7db128beda->enter($__internal_de3719c3ada5ea26e2f120f8ac93af52a6358eccf9246d072b474c7db128beda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_de3719c3ada5ea26e2f120f8ac93af52a6358eccf9246d072b474c7db128beda->leave($__internal_de3719c3ada5ea26e2f120f8ac93af52a6358eccf9246d072b474c7db128beda_prof);

        
        $__internal_703eb75ca9c838bb91bdd753adead805224369ae4f4417d883bdf82c0319bf87->leave($__internal_703eb75ca9c838bb91bdd753adead805224369ae4f4417d883bdf82c0319bf87_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_351e3b5c8f6440a8cc393ec2bcffff758d64cc3eb370b46aac225de9e79b6007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351e3b5c8f6440a8cc393ec2bcffff758d64cc3eb370b46aac225de9e79b6007->enter($__internal_351e3b5c8f6440a8cc393ec2bcffff758d64cc3eb370b46aac225de9e79b6007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fd53e1fcca8baf593a176596dff0ee9e6dbd39df488fc87f7c2240afd9bed229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd53e1fcca8baf593a176596dff0ee9e6dbd39df488fc87f7c2240afd9bed229->enter($__internal_fd53e1fcca8baf593a176596dff0ee9e6dbd39df488fc87f7c2240afd9bed229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_fd53e1fcca8baf593a176596dff0ee9e6dbd39df488fc87f7c2240afd9bed229->leave($__internal_fd53e1fcca8baf593a176596dff0ee9e6dbd39df488fc87f7c2240afd9bed229_prof);

        
        $__internal_351e3b5c8f6440a8cc393ec2bcffff758d64cc3eb370b46aac225de9e79b6007->leave($__internal_351e3b5c8f6440a8cc393ec2bcffff758d64cc3eb370b46aac225de9e79b6007_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_a075c991501caf95e95c85022e252fb60ce8a9bc3e0f3a10b0717aceba2dab08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a075c991501caf95e95c85022e252fb60ce8a9bc3e0f3a10b0717aceba2dab08->enter($__internal_a075c991501caf95e95c85022e252fb60ce8a9bc3e0f3a10b0717aceba2dab08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fdf46ae6e3d34b07892ea000b7882d93a042da11409991fed42d52126f66dff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf46ae6e3d34b07892ea000b7882d93a042da11409991fed42d52126f66dff9->enter($__internal_fdf46ae6e3d34b07892ea000b7882d93a042da11409991fed42d52126f66dff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
";
        // line 15
        echo " <div class=\"container\" style=\"height:100%\">
 \t";
        // line 17
        echo "\t";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "fos_user_security_login")) {
            // line 18
            echo "\t\t";
            // line 19
            echo "\t\t<div class=\"container\" style=\"margin-top: 10px\">
\t\t\t<div class=\"navbar-wrapper\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<nav class=\"navbar navbar-fixed-top\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\">
\t\t\t\t\t\t\t\t\t";
            // line 31
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "c39ed1e_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c39ed1e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c39ed1e_logo-cloud-blue_1.png");
                // line 32
                echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 32, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t";
            } else {
                // asset "c39ed1e"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c39ed1e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c39ed1e.png");
                echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 32, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t";
            }
            unset($context["asset_url"]);
            // line 34
            echo "\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t\t\t\t\t";
            // line 39
            echo "\t\t\t\t\t\t\t\t";
            $this->displayBlock('menu', $context, $blocks);
            // line 41
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            // line 48
            echo "\t\t<div class=\"container\" style=\"margin-top: 50px;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"text-left col-md-12\">
\t\t\t\t";
            // line 51
            $this->displayBlock('bird_title_notice', $context, $blocks);
            // line 63
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            // line 67
            echo "\t\t<div class=\"container\" style=\"margin-top: 5px\">
\t\t\t<div class=\"row h4 text-center\" style=\"color: white\">
\t\t\t\t";
            // line 69
            $this->displayBlock('page_title', $context, $blocks);
            // line 78
            echo "\t\t\t</div>
\t\t</div>
\t\t";
            // line 81
            echo "\t\t<div class=\"container\" style=\"margin-top: 0px\">
\t\t\t";
            // line 83
            echo "\t\t\t";
            $this->displayBlock('bird_body', $context, $blocks);
            // line 85
            echo "\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t<hr>
\t\t\t\t<footer  style=\"text-align: center;\">
\t\t\t\t\t<p class=\"well well-sm text-info\">Bird Web © ";
            // line 90
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo ".</p>
\t\t\t\t</footer>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 95
        echo "\t ";
        // line 96
        echo "\t<div class=\"container\">
\t\t";
        // line 97
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 99
        echo "\t</div>
</div>

<!-- Modal pour les messages utilisateurs-->
<div id=\"modal_class\"></div>
";
        
        $__internal_fdf46ae6e3d34b07892ea000b7882d93a042da11409991fed42d52126f66dff9->leave($__internal_fdf46ae6e3d34b07892ea000b7882d93a042da11409991fed42d52126f66dff9_prof);

        
        $__internal_a075c991501caf95e95c85022e252fb60ce8a9bc3e0f3a10b0717aceba2dab08->leave($__internal_a075c991501caf95e95c85022e252fb60ce8a9bc3e0f3a10b0717aceba2dab08_prof);

    }

    // line 39
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d41861a895d4135d45de5f29348491e932aba2dcd24ef1ba4cc6ad04db177027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d41861a895d4135d45de5f29348491e932aba2dcd24ef1ba4cc6ad04db177027->enter($__internal_d41861a895d4135d45de5f29348491e932aba2dcd24ef1ba4cc6ad04db177027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fa6aff28ba0bf83b81de6554072279a6c22af1eef8319a2f09beaef7f6dc5844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6aff28ba0bf83b81de6554072279a6c22af1eef8319a2f09beaef7f6dc5844->enter($__internal_fa6aff28ba0bf83b81de6554072279a6c22af1eef8319a2f09beaef7f6dc5844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 40
        echo "\t\t\t\t\t\t\t\t";
        
        $__internal_fa6aff28ba0bf83b81de6554072279a6c22af1eef8319a2f09beaef7f6dc5844->leave($__internal_fa6aff28ba0bf83b81de6554072279a6c22af1eef8319a2f09beaef7f6dc5844_prof);

        
        $__internal_d41861a895d4135d45de5f29348491e932aba2dcd24ef1ba4cc6ad04db177027->leave($__internal_d41861a895d4135d45de5f29348491e932aba2dcd24ef1ba4cc6ad04db177027_prof);

    }

    // line 51
    public function block_bird_title_notice($context, array $blocks = array())
    {
        $__internal_584ffd8131577b6cc919abe69b1691ad0abb80a2555b724132daa7898c362e8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584ffd8131577b6cc919abe69b1691ad0abb80a2555b724132daa7898c362e8f->enter($__internal_584ffd8131577b6cc919abe69b1691ad0abb80a2555b724132daa7898c362e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bird_title_notice"));

        $__internal_cfab7fbde1f6ca34c3f6ac2e75a1668bf8390c609cffb20d53bffc06044aba61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfab7fbde1f6ca34c3f6ac2e75a1668bf8390c609cffb20d53bffc06044aba61->enter($__internal_cfab7fbde1f6ca34c3f6ac2e75a1668bf8390c609cffb20d53bffc06044aba61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bird_title_notice"));

        // line 52
        echo "\t\t\t\t\t";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 52, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 53
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 54
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-";
                    echo twig_escape_filter($this->env, (($context["type"]) ? ($context["type"]) : ("")), "html", null, true);
                    echo " fade-in\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
\t\t\t\t\t\t\t\t\t<strong>";
                    // line 57
                    echo twig_escape_filter($this->env, (($context["type"]) ? ($context["type"]) : ("")), "html", null, true);
                    echo "!</strong> ";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t";
        
        $__internal_cfab7fbde1f6ca34c3f6ac2e75a1668bf8390c609cffb20d53bffc06044aba61->leave($__internal_cfab7fbde1f6ca34c3f6ac2e75a1668bf8390c609cffb20d53bffc06044aba61_prof);

        
        $__internal_584ffd8131577b6cc919abe69b1691ad0abb80a2555b724132daa7898c362e8f->leave($__internal_584ffd8131577b6cc919abe69b1691ad0abb80a2555b724132daa7898c362e8f_prof);

    }

    // line 69
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7c993d4c0c34c6f6bba3aff1b966b0fe1ac14d4615128646a236171a5ad75338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c993d4c0c34c6f6bba3aff1b966b0fe1ac14d4615128646a236171a5ad75338->enter($__internal_7c993d4c0c34c6f6bba3aff1b966b0fe1ac14d4615128646a236171a5ad75338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_65d15ad71affb3cd3c4d579cc782d5f8608ceab5248ca77c7084007bf3977361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d15ad71affb3cd3c4d579cc782d5f8608ceab5248ca77c7084007bf3977361->enter($__internal_65d15ad71affb3cd3c4d579cc782d5f8608ceab5248ca77c7084007bf3977361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 70
        echo "\t\t\t\t\t";
        if ( !array_key_exists("title", $context)) {
            // line 71
            echo "\t\t\t\t\t\t";
            $context["title"] = "title";
            // line 72
            echo "\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t";
        if ( !array_key_exists("title_comment", $context)) {
            // line 74
            echo "                        ";
            $context["title_comment"] = "";
            // line 75
            echo "                    ";
        }
        // line 76
        echo "\t\t\t\t\t";
        echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 76, $this->getSourceContext()); })()), array(), "ORGBirdBundle") . " ") . (isset($context["title_comment"]) || array_key_exists("title_comment", $context) ? $context["title_comment"] : (function () { throw new Twig_Error_Runtime('Variable "title_comment" does not exist.', 76, $this->getSourceContext()); })())), "html", null, true);
        echo "
\t\t\t\t";
        
        $__internal_65d15ad71affb3cd3c4d579cc782d5f8608ceab5248ca77c7084007bf3977361->leave($__internal_65d15ad71affb3cd3c4d579cc782d5f8608ceab5248ca77c7084007bf3977361_prof);

        
        $__internal_7c993d4c0c34c6f6bba3aff1b966b0fe1ac14d4615128646a236171a5ad75338->leave($__internal_7c993d4c0c34c6f6bba3aff1b966b0fe1ac14d4615128646a236171a5ad75338_prof);

    }

    // line 83
    public function block_bird_body($context, array $blocks = array())
    {
        $__internal_c80e75a6fbc26b1b4a182e05f9da75252033e575dcb137a14dd3fd86f7fa06f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80e75a6fbc26b1b4a182e05f9da75252033e575dcb137a14dd3fd86f7fa06f3->enter($__internal_c80e75a6fbc26b1b4a182e05f9da75252033e575dcb137a14dd3fd86f7fa06f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bird_body"));

        $__internal_727d4cea5ea54ec3a6561ad9821196c9b37dd94387026c5135e0cf4c5ee59c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727d4cea5ea54ec3a6561ad9821196c9b37dd94387026c5135e0cf4c5ee59c3d->enter($__internal_727d4cea5ea54ec3a6561ad9821196c9b37dd94387026c5135e0cf4c5ee59c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bird_body"));

        // line 84
        echo "\t\t\t";
        
        $__internal_727d4cea5ea54ec3a6561ad9821196c9b37dd94387026c5135e0cf4c5ee59c3d->leave($__internal_727d4cea5ea54ec3a6561ad9821196c9b37dd94387026c5135e0cf4c5ee59c3d_prof);

        
        $__internal_c80e75a6fbc26b1b4a182e05f9da75252033e575dcb137a14dd3fd86f7fa06f3->leave($__internal_c80e75a6fbc26b1b4a182e05f9da75252033e575dcb137a14dd3fd86f7fa06f3_prof);

    }

    // line 97
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3bac127f9cb0b95e5b0e08a2d2143d87bbc04f9e41a875c100ca536bb123e244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bac127f9cb0b95e5b0e08a2d2143d87bbc04f9e41a875c100ca536bb123e244->enter($__internal_3bac127f9cb0b95e5b0e08a2d2143d87bbc04f9e41a875c100ca536bb123e244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0200d1e73d12c50d989931c5cccdc86d62c7a42ab64cf562605757b9f0dab933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0200d1e73d12c50d989931c5cccdc86d62c7a42ab64cf562605757b9f0dab933->enter($__internal_0200d1e73d12c50d989931c5cccdc86d62c7a42ab64cf562605757b9f0dab933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 98
        echo "\t\t";
        
        $__internal_0200d1e73d12c50d989931c5cccdc86d62c7a42ab64cf562605757b9f0dab933->leave($__internal_0200d1e73d12c50d989931c5cccdc86d62c7a42ab64cf562605757b9f0dab933_prof);

        
        $__internal_3bac127f9cb0b95e5b0e08a2d2143d87bbc04f9e41a875c100ca536bb123e244->leave($__internal_3bac127f9cb0b95e5b0e08a2d2143d87bbc04f9e41a875c100ca536bb123e244_prof);

    }

    public function getTemplateName()
    {
        return "ORGBirdBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 98,  361 => 97,  351 => 84,  342 => 83,  329 => 76,  326 => 75,  323 => 74,  320 => 73,  317 => 72,  314 => 71,  311 => 70,  302 => 69,  292 => 62,  289 => 61,  283 => 60,  272 => 57,  266 => 55,  261 => 54,  256 => 53,  253 => 52,  244 => 51,  234 => 40,  225 => 39,  210 => 99,  208 => 97,  205 => 96,  203 => 95,  195 => 90,  188 => 85,  185 => 83,  182 => 81,  178 => 78,  176 => 69,  172 => 67,  167 => 63,  165 => 51,  160 => 48,  152 => 41,  149 => 39,  143 => 34,  129 => 32,  125 => 31,  111 => 19,  109 => 18,  106 => 17,  103 => 15,  100 => 13,  91 => 12,  78 => 9,  69 => 8,  56 => 5,  47 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}
{% trans_default_domain \"ORGBirdBundle\" %}

{% block javascripts %}
\t{{ parent() }}
{% endblock %}

{% block stylesheets %}
\t{{ parent() }}
{% endblock %}  

{% block body %}

{# Main block#}
 <div class=\"container\" style=\"height:100%\">
 \t{# Header #}
\t{% if app.request.attributes.get('_route') != 'fos_user_security_login' %}
\t\t{# MenuDisabledTwig #}
\t\t<div class=\"container\" style=\"margin-top: 10px\">
\t\t\t<div class=\"navbar-wrapper\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<nav class=\"navbar navbar-fixed-top\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\">
\t\t\t\t\t\t\t\t\t{% image '@ORGBirdBundle/Resources/public/images/logo-cloud-blue.png' %}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset_url }}\">
\t\t\t\t\t\t\t\t\t{% endimage %}
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t\t\t\t\t{# L'affichage du menu de la page se fait dans ce bloc#}
\t\t\t\t\t\t\t\t{% block menu %}
\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{# Message #}
\t\t<div class=\"container\" style=\"margin-top: 50px;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"text-left col-md-12\">
\t\t\t\t{% block bird_title_notice %}
\t\t\t\t\t{% if app.session.flashbag.peekAll|length > 0 %}
\t\t\t\t\t\t{% for type, messages in app.session.flashbag.all %}
\t\t\t\t\t\t\t{% for message in messages %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-{{ type ? type : '' }} fade-in\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
\t\t\t\t\t\t\t\t\t<strong>{{ type ? type : '' }}!</strong> {{ message }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endblock %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{# Titre de la page #}
\t\t<div class=\"container\" style=\"margin-top: 5px\">
\t\t\t<div class=\"row h4 text-center\" style=\"color: white\">
\t\t\t\t{% block page_title %}
\t\t\t\t\t{% if title is not defined %}
\t\t\t\t\t\t{% set title = 'title' %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if title_comment is not defined %}
                        {% set title_comment = '' %}
                    {% endif %}
\t\t\t\t\t{{ title|trans|raw ~ ' ' ~ title_comment|raw}}
\t\t\t\t{% endblock %}
\t\t\t</div>
\t\t</div>
\t\t{# Contenu de la page #}
\t\t<div class=\"container\" style=\"margin-top: 0px\">
\t\t\t{# Bird data block#}
\t\t\t{% block bird_body %}
\t\t\t{% endblock %}
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t<hr>
\t\t\t\t<footer  style=\"text-align: center;\">
\t\t\t\t\t<p class=\"well well-sm text-info\">Bird Web © {{ 'now'|date('Y') }}.</p>
\t\t\t\t</footer>
\t\t\t</div>
\t\t</div>
\t{% endif %}
\t {# Formulaire d'authentification #}
\t<div class=\"container\">
\t\t{% block fos_user_content %}
\t\t{% endblock fos_user_content %}
\t</div>
</div>

<!-- Modal pour les messages utilisateurs-->
<div id=\"modal_class\"></div>
{% endblock %}", "ORGBirdBundle::layout.html.twig", "/var/www/bird/src/ORG/BirdBundle/Resources/views/layout.html.twig");
    }
}
