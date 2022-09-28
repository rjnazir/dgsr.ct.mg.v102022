<?php

/* :form:bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_113e51a806137daa695f417c63371ceae745083963ebc39f831a3e1bc0416742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", ":form:bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3f9f7c88ff7bbb55c617a524d6e980059fccf173e7c6f897b899a13cd0d6b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f9f7c88ff7bbb55c617a524d6e980059fccf173e7c6f897b899a13cd0d6b1f->enter($__internal_b3f9f7c88ff7bbb55c617a524d6e980059fccf173e7c6f897b899a13cd0d6b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:bootstrap_3_horizontal_layout.html.twig"));

        $__internal_a47112b598aaf3c762d87b112735484a31eb3e6be8c7f5d04bcc9881b7ead21c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47112b598aaf3c762d87b112735484a31eb3e6be8c7f5d04bcc9881b7ead21c->enter($__internal_a47112b598aaf3c762d87b112735484a31eb3e6be8c7f5d04bcc9881b7ead21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('radio_row', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('submit_row', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('reset_row', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_b3f9f7c88ff7bbb55c617a524d6e980059fccf173e7c6f897b899a13cd0d6b1f->leave($__internal_b3f9f7c88ff7bbb55c617a524d6e980059fccf173e7c6f897b899a13cd0d6b1f_prof);

        
        $__internal_a47112b598aaf3c762d87b112735484a31eb3e6be8c7f5d04bcc9881b7ead21c->leave($__internal_a47112b598aaf3c762d87b112735484a31eb3e6be8c7f5d04bcc9881b7ead21c_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_a05fb67980e6370ff1474aebfe76926b78b7069ba0bc2203a88f2e5450f87f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05fb67980e6370ff1474aebfe76926b78b7069ba0bc2203a88f2e5450f87f75->enter($__internal_a05fb67980e6370ff1474aebfe76926b78b7069ba0bc2203a88f2e5450f87f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_0735f85fd066fe701e4a24fd44196760425aee61a9e9315c5868fb73ecaeace6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0735f85fd066fe701e4a24fd44196760425aee61a9e9315c5868fb73ecaeace6->enter($__internal_0735f85fd066fe701e4a24fd44196760425aee61a9e9315c5868fb73ecaeace6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_0735f85fd066fe701e4a24fd44196760425aee61a9e9315c5868fb73ecaeace6->leave($__internal_0735f85fd066fe701e4a24fd44196760425aee61a9e9315c5868fb73ecaeace6_prof);

        
        $__internal_a05fb67980e6370ff1474aebfe76926b78b7069ba0bc2203a88f2e5450f87f75->leave($__internal_a05fb67980e6370ff1474aebfe76926b78b7069ba0bc2203a88f2e5450f87f75_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ad4c75c1d20cff2890907ac8abf7d5c637f08e19fc19d118edf7e6a3538952fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad4c75c1d20cff2890907ac8abf7d5c637f08e19fc19d118edf7e6a3538952fd->enter($__internal_ad4c75c1d20cff2890907ac8abf7d5c637f08e19fc19d118edf7e6a3538952fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7152b5e4d36f7b920db4fd76d559812c748d9e77ef8df480b85223d3ebf6a4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7152b5e4d36f7b920db4fd76d559812c748d9e77ef8df480b85223d3ebf6a4ee->enter($__internal_7152b5e4d36f7b920db4fd76d559812c748d9e77ef8df480b85223d3ebf6a4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7152b5e4d36f7b920db4fd76d559812c748d9e77ef8df480b85223d3ebf6a4ee->leave($__internal_7152b5e4d36f7b920db4fd76d559812c748d9e77ef8df480b85223d3ebf6a4ee_prof);

        
        $__internal_ad4c75c1d20cff2890907ac8abf7d5c637f08e19fc19d118edf7e6a3538952fd->leave($__internal_ad4c75c1d20cff2890907ac8abf7d5c637f08e19fc19d118edf7e6a3538952fd_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_239d57504a022e1c4c01ec27bca576bdf362af55828ef824232b761c0cca4550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239d57504a022e1c4c01ec27bca576bdf362af55828ef824232b761c0cca4550->enter($__internal_239d57504a022e1c4c01ec27bca576bdf362af55828ef824232b761c0cca4550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_17fdb047a1c11d21ea312d5f9c33c6a0dc89c84bb7aa58f92bf42d77e8977304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17fdb047a1c11d21ea312d5f9c33c6a0dc89c84bb7aa58f92bf42d77e8977304->enter($__internal_17fdb047a1c11d21ea312d5f9c33c6a0dc89c84bb7aa58f92bf42d77e8977304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-4";
        
        $__internal_17fdb047a1c11d21ea312d5f9c33c6a0dc89c84bb7aa58f92bf42d77e8977304->leave($__internal_17fdb047a1c11d21ea312d5f9c33c6a0dc89c84bb7aa58f92bf42d77e8977304_prof);

        
        $__internal_239d57504a022e1c4c01ec27bca576bdf362af55828ef824232b761c0cca4550->leave($__internal_239d57504a022e1c4c01ec27bca576bdf362af55828ef824232b761c0cca4550_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e574c1589e6605050e8920932ed7e3a46b076ca1f1082ecd5bf3e672998756b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e574c1589e6605050e8920932ed7e3a46b076ca1f1082ecd5bf3e672998756b0->enter($__internal_e574c1589e6605050e8920932ed7e3a46b076ca1f1082ecd5bf3e672998756b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9215522988fe74ffe113e7f417806e8b5eb3a251ac94c1380fe9f0926252257d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9215522988fe74ffe113e7f417806e8b5eb3a251ac94c1380fe9f0926252257d->enter($__internal_9215522988fe74ffe113e7f417806e8b5eb3a251ac94c1380fe9f0926252257d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "name", array()) == twig_constant("Aes\\Bundle\\SettingBundle\\Entity\\Setting::TAUXCONVERSION_KEY"))) {
            // line 27
            echo "        <div class=\"form-group";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " has-error";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">
                <div class=\"input-group input-group-sm\">
                    ";
            // line 31
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
                    <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-info btn-flat\">
                          EUR
                      </button>
                    </span>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 41
            echo "    <div class=\"form-group";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " has-error-group ";
            }
            echo "\">";
            // line 42
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 43
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 46
            echo "        </div>
    </div>
    ";
        }
        
        $__internal_9215522988fe74ffe113e7f417806e8b5eb3a251ac94c1380fe9f0926252257d->leave($__internal_9215522988fe74ffe113e7f417806e8b5eb3a251ac94c1380fe9f0926252257d_prof);

        
        $__internal_e574c1589e6605050e8920932ed7e3a46b076ca1f1082ecd5bf3e672998756b0->leave($__internal_e574c1589e6605050e8920932ed7e3a46b076ca1f1082ecd5bf3e672998756b0_prof);

    }

    // line 51
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9d552126b9d69f4f258bb82b45c5478a3a85c9be2c82f4ac20ffba94f3540946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d552126b9d69f4f258bb82b45c5478a3a85c9be2c82f4ac20ffba94f3540946->enter($__internal_9d552126b9d69f4f258bb82b45c5478a3a85c9be2c82f4ac20ffba94f3540946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e873385a7c586fa81660ca618a748bf2336fb9bb23eb3e17bcb43026d7b54a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e873385a7c586fa81660ca618a748bf2336fb9bb23eb3e17bcb43026d7b54a88->enter($__internal_e873385a7c586fa81660ca618a748bf2336fb9bb23eb3e17bcb43026d7b54a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 52
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_e873385a7c586fa81660ca618a748bf2336fb9bb23eb3e17bcb43026d7b54a88->leave($__internal_e873385a7c586fa81660ca618a748bf2336fb9bb23eb3e17bcb43026d7b54a88_prof);

        
        $__internal_9d552126b9d69f4f258bb82b45c5478a3a85c9be2c82f4ac20ffba94f3540946->leave($__internal_9d552126b9d69f4f258bb82b45c5478a3a85c9be2c82f4ac20ffba94f3540946_prof);

    }

    // line 55
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e10dac6dd501069743a063477793f078eeb5917e90cf3afd4f7849acf2a76986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10dac6dd501069743a063477793f078eeb5917e90cf3afd4f7849acf2a76986->enter($__internal_e10dac6dd501069743a063477793f078eeb5917e90cf3afd4f7849acf2a76986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_f6fe1c0e4f328c486c49ce671667c92aa2297027df55cbd872ef3fd6f40fd8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fe1c0e4f328c486c49ce671667c92aa2297027df55cbd872ef3fd6f40fd8c5->enter($__internal_f6fe1c0e4f328c486c49ce671667c92aa2297027df55cbd872ef3fd6f40fd8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 56
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_f6fe1c0e4f328c486c49ce671667c92aa2297027df55cbd872ef3fd6f40fd8c5->leave($__internal_f6fe1c0e4f328c486c49ce671667c92aa2297027df55cbd872ef3fd6f40fd8c5_prof);

        
        $__internal_e10dac6dd501069743a063477793f078eeb5917e90cf3afd4f7849acf2a76986->leave($__internal_e10dac6dd501069743a063477793f078eeb5917e90cf3afd4f7849acf2a76986_prof);

    }

    // line 59
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_ffb65347c3f3cd5fc672cf9963cf5299f306e9a56dde2321983f5daf5e853c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb65347c3f3cd5fc672cf9963cf5299f306e9a56dde2321983f5daf5e853c2a->enter($__internal_ffb65347c3f3cd5fc672cf9963cf5299f306e9a56dde2321983f5daf5e853c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_2e01f8223e4a9424eebae9b26d8675d40c47bcded689cfd8583e63d119167f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e01f8223e4a9424eebae9b26d8675d40c47bcded689cfd8583e63d119167f5c->enter($__internal_2e01f8223e4a9424eebae9b26d8675d40c47bcded689cfd8583e63d119167f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 60
        ob_start();
        // line 61
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 62
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 63
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2e01f8223e4a9424eebae9b26d8675d40c47bcded689cfd8583e63d119167f5c->leave($__internal_2e01f8223e4a9424eebae9b26d8675d40c47bcded689cfd8583e63d119167f5c_prof);

        
        $__internal_ffb65347c3f3cd5fc672cf9963cf5299f306e9a56dde2321983f5daf5e853c2a->leave($__internal_ffb65347c3f3cd5fc672cf9963cf5299f306e9a56dde2321983f5daf5e853c2a_prof);

    }

    // line 71
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_c76de9128513cf3e7b429fb4b2a98779d34e6bfa19c7346fdbd0faaa0041285c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c76de9128513cf3e7b429fb4b2a98779d34e6bfa19c7346fdbd0faaa0041285c->enter($__internal_c76de9128513cf3e7b429fb4b2a98779d34e6bfa19c7346fdbd0faaa0041285c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_9426daf662452e6bd165689f33d8e60bf2aedf3732545ac0a5cdd95d63a5bb40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9426daf662452e6bd165689f33d8e60bf2aedf3732545ac0a5cdd95d63a5bb40->enter($__internal_9426daf662452e6bd165689f33d8e60bf2aedf3732545ac0a5cdd95d63a5bb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 72
        ob_start();
        // line 73
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 74
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 75
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9426daf662452e6bd165689f33d8e60bf2aedf3732545ac0a5cdd95d63a5bb40->leave($__internal_9426daf662452e6bd165689f33d8e60bf2aedf3732545ac0a5cdd95d63a5bb40_prof);

        
        $__internal_c76de9128513cf3e7b429fb4b2a98779d34e6bfa19c7346fdbd0faaa0041285c->leave($__internal_c76de9128513cf3e7b429fb4b2a98779d34e6bfa19c7346fdbd0faaa0041285c_prof);

    }

    // line 82
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_ffa58dd099c6540aa66e31fdf549118c53e3b8d9a142de792c76ce1597bbedeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa58dd099c6540aa66e31fdf549118c53e3b8d9a142de792c76ce1597bbedeb->enter($__internal_ffa58dd099c6540aa66e31fdf549118c53e3b8d9a142de792c76ce1597bbedeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_c5daa7f001971674843c897ff63dc9f5cb68bea4a7cebf3dd1f201c71e47602b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5daa7f001971674843c897ff63dc9f5cb68bea4a7cebf3dd1f201c71e47602b->enter($__internal_c5daa7f001971674843c897ff63dc9f5cb68bea4a7cebf3dd1f201c71e47602b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 83
        ob_start();
        // line 84
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 85
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 86
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c5daa7f001971674843c897ff63dc9f5cb68bea4a7cebf3dd1f201c71e47602b->leave($__internal_c5daa7f001971674843c897ff63dc9f5cb68bea4a7cebf3dd1f201c71e47602b_prof);

        
        $__internal_ffa58dd099c6540aa66e31fdf549118c53e3b8d9a142de792c76ce1597bbedeb->leave($__internal_ffa58dd099c6540aa66e31fdf549118c53e3b8d9a142de792c76ce1597bbedeb_prof);

    }

    // line 93
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_89918f053240ef2755a199f86f6ea34b6467b974230d27d51d33bb1ce1052b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89918f053240ef2755a199f86f6ea34b6467b974230d27d51d33bb1ce1052b47->enter($__internal_89918f053240ef2755a199f86f6ea34b6467b974230d27d51d33bb1ce1052b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_9ea72a9c87be4829f13923a9e9cf50c6a427066e84ede0ad303e8105ac06afee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea72a9c87be4829f13923a9e9cf50c6a427066e84ede0ad303e8105ac06afee->enter($__internal_9ea72a9c87be4829f13923a9e9cf50c6a427066e84ede0ad303e8105ac06afee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 94
        echo "col-sm-6";
        
        $__internal_9ea72a9c87be4829f13923a9e9cf50c6a427066e84ede0ad303e8105ac06afee->leave($__internal_9ea72a9c87be4829f13923a9e9cf50c6a427066e84ede0ad303e8105ac06afee_prof);

        
        $__internal_89918f053240ef2755a199f86f6ea34b6467b974230d27d51d33bb1ce1052b47->leave($__internal_89918f053240ef2755a199f86f6ea34b6467b974230d27d51d33bb1ce1052b47_prof);

    }

    public function getTemplateName()
    {
        return ":form:bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  414 => 94,  405 => 93,  390 => 87,  386 => 86,  382 => 85,  379 => 84,  377 => 83,  368 => 82,  353 => 76,  349 => 75,  345 => 74,  342 => 73,  340 => 72,  331 => 71,  316 => 65,  312 => 64,  308 => 63,  304 => 62,  297 => 61,  295 => 60,  286 => 59,  276 => 56,  267 => 55,  257 => 52,  248 => 51,  235 => 46,  233 => 44,  229 => 43,  227 => 42,  221 => 41,  208 => 31,  202 => 29,  200 => 28,  194 => 27,  192 => 26,  183 => 25,  173 => 22,  164 => 21,  152 => 16,  149 => 15,  143 => 13,  140 => 12,  138 => 11,  129 => 10,  119 => 5,  117 => 4,  108 => 3,  98 => 93,  95 => 92,  93 => 82,  90 => 81,  88 => 71,  85 => 70,  83 => 59,  80 => 58,  78 => 55,  75 => 54,  73 => 51,  70 => 50,  68 => 25,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-4
{%- endblock form_label_class %}

{% block form_row -%}
    {% if form.vars.name == constant('Aes\\\\Bundle\\\\SettingBundle\\\\Entity\\\\Setting::TAUXCONVERSION_KEY') %}
        <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                <div class=\"input-group input-group-sm\">
                    {{ block('form_widget') }}
                    <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-info btn-flat\">
                          EUR
                      </button>
                    </span>
                </div>
            </div>
        </div>
    {% else %}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error-group {% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {#{{- form_errors(form) -}}#}
        </div>
    </div>
    {% endif %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-6
{%- endblock form_group_class %}
", ":form:bootstrap_3_horizontal_layout.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app/Resources\\views/form/bootstrap_3_horizontal_layout.html.twig");
    }
}
