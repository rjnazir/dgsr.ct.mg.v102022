<?php

/* :form:bootstrap_3_horizontal_layout_custom.html.twig */
class __TwigTemplate_6d7fbd475f1aae1b3e28d5fd63a3c04e91761b034af8b01aefc381f04004fb80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", ":form:bootstrap_3_horizontal_layout_custom.html.twig", 1);
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
        $__internal_619f70187e62c4c88bd84c84b20cdf5b00a380aee9f0c06d060ae8a3269151a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619f70187e62c4c88bd84c84b20cdf5b00a380aee9f0c06d060ae8a3269151a6->enter($__internal_619f70187e62c4c88bd84c84b20cdf5b00a380aee9f0c06d060ae8a3269151a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:bootstrap_3_horizontal_layout_custom.html.twig"));

        $__internal_6477e4071d354a97a762340bd03d9e9585b5d6141cf6c67e705cb38cb096bf95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6477e4071d354a97a762340bd03d9e9585b5d6141cf6c67e705cb38cb096bf95->enter($__internal_6477e4071d354a97a762340bd03d9e9585b5d6141cf6c67e705cb38cb096bf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:bootstrap_3_horizontal_layout_custom.html.twig"));

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
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('radio_row', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('submit_row', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('reset_row', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_619f70187e62c4c88bd84c84b20cdf5b00a380aee9f0c06d060ae8a3269151a6->leave($__internal_619f70187e62c4c88bd84c84b20cdf5b00a380aee9f0c06d060ae8a3269151a6_prof);

        
        $__internal_6477e4071d354a97a762340bd03d9e9585b5d6141cf6c67e705cb38cb096bf95->leave($__internal_6477e4071d354a97a762340bd03d9e9585b5d6141cf6c67e705cb38cb096bf95_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2b49882402e282cc8566b4de399758508177fa4c5a048c11e4229e453f235bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b49882402e282cc8566b4de399758508177fa4c5a048c11e4229e453f235bdd->enter($__internal_2b49882402e282cc8566b4de399758508177fa4c5a048c11e4229e453f235bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_f0db97a3b3f2e238906c340b6b50a27af460c6ecdf86053ec719b2fb08f73b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0db97a3b3f2e238906c340b6b50a27af460c6ecdf86053ec719b2fb08f73b48->enter($__internal_f0db97a3b3f2e238906c340b6b50a27af460c6ecdf86053ec719b2fb08f73b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_f0db97a3b3f2e238906c340b6b50a27af460c6ecdf86053ec719b2fb08f73b48->leave($__internal_f0db97a3b3f2e238906c340b6b50a27af460c6ecdf86053ec719b2fb08f73b48_prof);

        
        $__internal_2b49882402e282cc8566b4de399758508177fa4c5a048c11e4229e453f235bdd->leave($__internal_2b49882402e282cc8566b4de399758508177fa4c5a048c11e4229e453f235bdd_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5d8f694f40a09954f2bf337352e36b9855d707e6eb2ce77e0155193ab284881f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d8f694f40a09954f2bf337352e36b9855d707e6eb2ce77e0155193ab284881f->enter($__internal_5d8f694f40a09954f2bf337352e36b9855d707e6eb2ce77e0155193ab284881f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a43e1156aeee963730bb5b40e082dcce77f0cd38791e7425a220b1e1a20ae6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43e1156aeee963730bb5b40e082dcce77f0cd38791e7425a220b1e1a20ae6d3->enter($__internal_a43e1156aeee963730bb5b40e082dcce77f0cd38791e7425a220b1e1a20ae6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_a43e1156aeee963730bb5b40e082dcce77f0cd38791e7425a220b1e1a20ae6d3->leave($__internal_a43e1156aeee963730bb5b40e082dcce77f0cd38791e7425a220b1e1a20ae6d3_prof);

        
        $__internal_5d8f694f40a09954f2bf337352e36b9855d707e6eb2ce77e0155193ab284881f->leave($__internal_5d8f694f40a09954f2bf337352e36b9855d707e6eb2ce77e0155193ab284881f_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_6cdc58ad4324ea14eda4f6c735d656799c340dc1adf758e17eac643a65f341ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cdc58ad4324ea14eda4f6c735d656799c340dc1adf758e17eac643a65f341ed->enter($__internal_6cdc58ad4324ea14eda4f6c735d656799c340dc1adf758e17eac643a65f341ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_8feccf186c4f6f06a54b7a000c5f5bcbffad85bbb0c19e339e5970a9e9dd348d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8feccf186c4f6f06a54b7a000c5f5bcbffad85bbb0c19e339e5970a9e9dd348d->enter($__internal_8feccf186c4f6f06a54b7a000c5f5bcbffad85bbb0c19e339e5970a9e9dd348d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-4";
        
        $__internal_8feccf186c4f6f06a54b7a000c5f5bcbffad85bbb0c19e339e5970a9e9dd348d->leave($__internal_8feccf186c4f6f06a54b7a000c5f5bcbffad85bbb0c19e339e5970a9e9dd348d_prof);

        
        $__internal_6cdc58ad4324ea14eda4f6c735d656799c340dc1adf758e17eac643a65f341ed->leave($__internal_6cdc58ad4324ea14eda4f6c735d656799c340dc1adf758e17eac643a65f341ed_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_948709323505ec4fc6eee02a1e1c621b3a1228dc870e85053e07666fee722cfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948709323505ec4fc6eee02a1e1c621b3a1228dc870e85053e07666fee722cfd->enter($__internal_948709323505ec4fc6eee02a1e1c621b3a1228dc870e85053e07666fee722cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ab685c38a0fb75802967e1ab2704eaa0ad10c0796bbaab10d04bc53cb84e6b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab685c38a0fb75802967e1ab2704eaa0ad10c0796bbaab10d04bc53cb84e6b6b->enter($__internal_ab685c38a0fb75802967e1ab2704eaa0ad10c0796bbaab10d04bc53cb84e6b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error ";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 31
        echo "</div>
        ";
        // line 32
        echo "</div>";
        
        $__internal_ab685c38a0fb75802967e1ab2704eaa0ad10c0796bbaab10d04bc53cb84e6b6b->leave($__internal_ab685c38a0fb75802967e1ab2704eaa0ad10c0796bbaab10d04bc53cb84e6b6b_prof);

        
        $__internal_948709323505ec4fc6eee02a1e1c621b3a1228dc870e85053e07666fee722cfd->leave($__internal_948709323505ec4fc6eee02a1e1c621b3a1228dc870e85053e07666fee722cfd_prof);

    }

    // line 35
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f4951643d999590e195a47312768eac512e1474f68aaa3c50e45397990a408bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4951643d999590e195a47312768eac512e1474f68aaa3c50e45397990a408bd->enter($__internal_f4951643d999590e195a47312768eac512e1474f68aaa3c50e45397990a408bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_dab184ec10afdbe7777440573df88874b1cf055422c42ec5b095b9ec328f33aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab184ec10afdbe7777440573df88874b1cf055422c42ec5b095b9ec328f33aa->enter($__internal_dab184ec10afdbe7777440573df88874b1cf055422c42ec5b095b9ec328f33aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 36
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_dab184ec10afdbe7777440573df88874b1cf055422c42ec5b095b9ec328f33aa->leave($__internal_dab184ec10afdbe7777440573df88874b1cf055422c42ec5b095b9ec328f33aa_prof);

        
        $__internal_f4951643d999590e195a47312768eac512e1474f68aaa3c50e45397990a408bd->leave($__internal_f4951643d999590e195a47312768eac512e1474f68aaa3c50e45397990a408bd_prof);

    }

    // line 39
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_f0c818a5baecc8af70a0327f1d5da5782ff6691c1dc6bdb1f3085bd29330cfa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c818a5baecc8af70a0327f1d5da5782ff6691c1dc6bdb1f3085bd29330cfa2->enter($__internal_f0c818a5baecc8af70a0327f1d5da5782ff6691c1dc6bdb1f3085bd29330cfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3b08bdab89cbd13fa495075e5722acb3c439f412e2f1651e5c5b8e9621562011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b08bdab89cbd13fa495075e5722acb3c439f412e2f1651e5c5b8e9621562011->enter($__internal_3b08bdab89cbd13fa495075e5722acb3c439f412e2f1651e5c5b8e9621562011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 40
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_3b08bdab89cbd13fa495075e5722acb3c439f412e2f1651e5c5b8e9621562011->leave($__internal_3b08bdab89cbd13fa495075e5722acb3c439f412e2f1651e5c5b8e9621562011_prof);

        
        $__internal_f0c818a5baecc8af70a0327f1d5da5782ff6691c1dc6bdb1f3085bd29330cfa2->leave($__internal_f0c818a5baecc8af70a0327f1d5da5782ff6691c1dc6bdb1f3085bd29330cfa2_prof);

    }

    // line 43
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_5e404a42fe34ee62407f452b11196fb9e9094c1f66fdbd11ad9724ec63e238f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e404a42fe34ee62407f452b11196fb9e9094c1f66fdbd11ad9724ec63e238f6->enter($__internal_5e404a42fe34ee62407f452b11196fb9e9094c1f66fdbd11ad9724ec63e238f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_90cd047976a5df98405ff0e0e5ab73678a917c647aaa8ae6d64fbf5388e2799e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90cd047976a5df98405ff0e0e5ab73678a917c647aaa8ae6d64fbf5388e2799e->enter($__internal_90cd047976a5df98405ff0e0e5ab73678a917c647aaa8ae6d64fbf5388e2799e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 44
        ob_start();
        // line 45
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 46
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 47
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_90cd047976a5df98405ff0e0e5ab73678a917c647aaa8ae6d64fbf5388e2799e->leave($__internal_90cd047976a5df98405ff0e0e5ab73678a917c647aaa8ae6d64fbf5388e2799e_prof);

        
        $__internal_5e404a42fe34ee62407f452b11196fb9e9094c1f66fdbd11ad9724ec63e238f6->leave($__internal_5e404a42fe34ee62407f452b11196fb9e9094c1f66fdbd11ad9724ec63e238f6_prof);

    }

    // line 55
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_c7403e60bcf297f266f85afdc3672e3c18fcd55020d3fa8975488a6867834b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7403e60bcf297f266f85afdc3672e3c18fcd55020d3fa8975488a6867834b46->enter($__internal_c7403e60bcf297f266f85afdc3672e3c18fcd55020d3fa8975488a6867834b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_4f30e5310378d7c57ed9dfe8ef42a78117567e4a7b3f1dee5673c251cb711528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f30e5310378d7c57ed9dfe8ef42a78117567e4a7b3f1dee5673c251cb711528->enter($__internal_4f30e5310378d7c57ed9dfe8ef42a78117567e4a7b3f1dee5673c251cb711528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 56
        ob_start();
        // line 57
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 58
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 59
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4f30e5310378d7c57ed9dfe8ef42a78117567e4a7b3f1dee5673c251cb711528->leave($__internal_4f30e5310378d7c57ed9dfe8ef42a78117567e4a7b3f1dee5673c251cb711528_prof);

        
        $__internal_c7403e60bcf297f266f85afdc3672e3c18fcd55020d3fa8975488a6867834b46->leave($__internal_c7403e60bcf297f266f85afdc3672e3c18fcd55020d3fa8975488a6867834b46_prof);

    }

    // line 66
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_33a4496e6b36e6ea2644a69a5fe1a2edb3a6401cbb7b7a0b607fdf1bad3a8496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a4496e6b36e6ea2644a69a5fe1a2edb3a6401cbb7b7a0b607fdf1bad3a8496->enter($__internal_33a4496e6b36e6ea2644a69a5fe1a2edb3a6401cbb7b7a0b607fdf1bad3a8496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_4d4025bf2573af42c653edc9d563c51e2b0c1f185afe321576647231d6fe9b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4025bf2573af42c653edc9d563c51e2b0c1f185afe321576647231d6fe9b5d->enter($__internal_4d4025bf2573af42c653edc9d563c51e2b0c1f185afe321576647231d6fe9b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 67
        ob_start();
        // line 68
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 69
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 70
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4d4025bf2573af42c653edc9d563c51e2b0c1f185afe321576647231d6fe9b5d->leave($__internal_4d4025bf2573af42c653edc9d563c51e2b0c1f185afe321576647231d6fe9b5d_prof);

        
        $__internal_33a4496e6b36e6ea2644a69a5fe1a2edb3a6401cbb7b7a0b607fdf1bad3a8496->leave($__internal_33a4496e6b36e6ea2644a69a5fe1a2edb3a6401cbb7b7a0b607fdf1bad3a8496_prof);

    }

    // line 77
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_f15ae4b91704e8874e16b6b742b4cb13c9c79dd37ee062cb9172bbb0a0cbb477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15ae4b91704e8874e16b6b742b4cb13c9c79dd37ee062cb9172bbb0a0cbb477->enter($__internal_f15ae4b91704e8874e16b6b742b4cb13c9c79dd37ee062cb9172bbb0a0cbb477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_6b2bfbbeb347662b33cc2cae50c9895c6bf0c77e51e18a43fc1d17929eaf7146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2bfbbeb347662b33cc2cae50c9895c6bf0c77e51e18a43fc1d17929eaf7146->enter($__internal_6b2bfbbeb347662b33cc2cae50c9895c6bf0c77e51e18a43fc1d17929eaf7146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 78
        echo "col-sm-6";
        
        $__internal_6b2bfbbeb347662b33cc2cae50c9895c6bf0c77e51e18a43fc1d17929eaf7146->leave($__internal_6b2bfbbeb347662b33cc2cae50c9895c6bf0c77e51e18a43fc1d17929eaf7146_prof);

        
        $__internal_f15ae4b91704e8874e16b6b742b4cb13c9c79dd37ee062cb9172bbb0a0cbb477->leave($__internal_f15ae4b91704e8874e16b6b742b4cb13c9c79dd37ee062cb9172bbb0a0cbb477_prof);

    }

    public function getTemplateName()
    {
        return ":form:bootstrap_3_horizontal_layout_custom.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  387 => 78,  378 => 77,  363 => 71,  359 => 70,  355 => 69,  352 => 68,  350 => 67,  341 => 66,  326 => 60,  322 => 59,  318 => 58,  315 => 57,  313 => 56,  304 => 55,  289 => 49,  285 => 48,  281 => 47,  277 => 46,  270 => 45,  268 => 44,  259 => 43,  249 => 40,  240 => 39,  230 => 36,  221 => 35,  211 => 32,  208 => 31,  206 => 30,  204 => 29,  200 => 28,  198 => 27,  192 => 26,  183 => 25,  173 => 22,  164 => 21,  152 => 16,  149 => 15,  143 => 13,  140 => 12,  138 => 11,  129 => 10,  119 => 5,  117 => 4,  108 => 3,  98 => 77,  95 => 76,  93 => 66,  90 => 65,  88 => 55,  85 => 54,  83 => 43,  80 => 42,  78 => 39,  75 => 38,  73 => 35,  70 => 34,  68 => 25,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
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
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error {% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
        {##}</div>
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
", ":form:bootstrap_3_horizontal_layout_custom.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app/Resources\\views/form/bootstrap_3_horizontal_layout_custom.html.twig");
    }
}
