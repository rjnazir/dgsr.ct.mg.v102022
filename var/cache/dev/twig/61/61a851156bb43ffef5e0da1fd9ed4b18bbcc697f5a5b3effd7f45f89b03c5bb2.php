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
        $__internal_316fc496bba3a6239fab7c11f9727b21ff965d560358c22f7f5304fae755f26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316fc496bba3a6239fab7c11f9727b21ff965d560358c22f7f5304fae755f26d->enter($__internal_316fc496bba3a6239fab7c11f9727b21ff965d560358c22f7f5304fae755f26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:bootstrap_3_horizontal_layout_custom.html.twig"));

        $__internal_35a3f30c3b9a2acc154b104b62621dda0fecce88d677b73e10e3022537910bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a3f30c3b9a2acc154b104b62621dda0fecce88d677b73e10e3022537910bee->enter($__internal_35a3f30c3b9a2acc154b104b62621dda0fecce88d677b73e10e3022537910bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:bootstrap_3_horizontal_layout_custom.html.twig"));

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
        
        $__internal_316fc496bba3a6239fab7c11f9727b21ff965d560358c22f7f5304fae755f26d->leave($__internal_316fc496bba3a6239fab7c11f9727b21ff965d560358c22f7f5304fae755f26d_prof);

        
        $__internal_35a3f30c3b9a2acc154b104b62621dda0fecce88d677b73e10e3022537910bee->leave($__internal_35a3f30c3b9a2acc154b104b62621dda0fecce88d677b73e10e3022537910bee_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_57305e68c0091eda48ab3d5b94850a00fa74558b21eb5db7c1c8a51ddd6eb0cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57305e68c0091eda48ab3d5b94850a00fa74558b21eb5db7c1c8a51ddd6eb0cb->enter($__internal_57305e68c0091eda48ab3d5b94850a00fa74558b21eb5db7c1c8a51ddd6eb0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_db7c5456dcabdac52def7a52e5574430f43f6f3d29bfe2cfcf9289a74cc278c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7c5456dcabdac52def7a52e5574430f43f6f3d29bfe2cfcf9289a74cc278c3->enter($__internal_db7c5456dcabdac52def7a52e5574430f43f6f3d29bfe2cfcf9289a74cc278c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_db7c5456dcabdac52def7a52e5574430f43f6f3d29bfe2cfcf9289a74cc278c3->leave($__internal_db7c5456dcabdac52def7a52e5574430f43f6f3d29bfe2cfcf9289a74cc278c3_prof);

        
        $__internal_57305e68c0091eda48ab3d5b94850a00fa74558b21eb5db7c1c8a51ddd6eb0cb->leave($__internal_57305e68c0091eda48ab3d5b94850a00fa74558b21eb5db7c1c8a51ddd6eb0cb_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_826ad25d75bc45ef2c88c93cc52a99dae27792290c110774c089bfaad97f8ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_826ad25d75bc45ef2c88c93cc52a99dae27792290c110774c089bfaad97f8ecd->enter($__internal_826ad25d75bc45ef2c88c93cc52a99dae27792290c110774c089bfaad97f8ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_66b51ef0e39fa1f1c7c18577e990e3a8b8587cd1fe934432b0f2de914b28fbeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b51ef0e39fa1f1c7c18577e990e3a8b8587cd1fe934432b0f2de914b28fbeb->enter($__internal_66b51ef0e39fa1f1c7c18577e990e3a8b8587cd1fe934432b0f2de914b28fbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_66b51ef0e39fa1f1c7c18577e990e3a8b8587cd1fe934432b0f2de914b28fbeb->leave($__internal_66b51ef0e39fa1f1c7c18577e990e3a8b8587cd1fe934432b0f2de914b28fbeb_prof);

        
        $__internal_826ad25d75bc45ef2c88c93cc52a99dae27792290c110774c089bfaad97f8ecd->leave($__internal_826ad25d75bc45ef2c88c93cc52a99dae27792290c110774c089bfaad97f8ecd_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_47d1e067c8217fe67568462d48381184f85c482db6a3c558c656acb193385843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d1e067c8217fe67568462d48381184f85c482db6a3c558c656acb193385843->enter($__internal_47d1e067c8217fe67568462d48381184f85c482db6a3c558c656acb193385843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a6efb795cd6cf4ec886a8051fb5f1932e4bb4bcb62865de8d9d0871a87a92c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6efb795cd6cf4ec886a8051fb5f1932e4bb4bcb62865de8d9d0871a87a92c7a->enter($__internal_a6efb795cd6cf4ec886a8051fb5f1932e4bb4bcb62865de8d9d0871a87a92c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-4";
        
        $__internal_a6efb795cd6cf4ec886a8051fb5f1932e4bb4bcb62865de8d9d0871a87a92c7a->leave($__internal_a6efb795cd6cf4ec886a8051fb5f1932e4bb4bcb62865de8d9d0871a87a92c7a_prof);

        
        $__internal_47d1e067c8217fe67568462d48381184f85c482db6a3c558c656acb193385843->leave($__internal_47d1e067c8217fe67568462d48381184f85c482db6a3c558c656acb193385843_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fc9af8635f65ddfe73479a9d5676117c5c4138e0ec6f44de645e9acd06cf7261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9af8635f65ddfe73479a9d5676117c5c4138e0ec6f44de645e9acd06cf7261->enter($__internal_fc9af8635f65ddfe73479a9d5676117c5c4138e0ec6f44de645e9acd06cf7261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_333b2aaadeb3a162b00aef59b5dcccc41cb50562f9acbf98a44f09eaef253fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333b2aaadeb3a162b00aef59b5dcccc41cb50562f9acbf98a44f09eaef253fb3->enter($__internal_333b2aaadeb3a162b00aef59b5dcccc41cb50562f9acbf98a44f09eaef253fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_333b2aaadeb3a162b00aef59b5dcccc41cb50562f9acbf98a44f09eaef253fb3->leave($__internal_333b2aaadeb3a162b00aef59b5dcccc41cb50562f9acbf98a44f09eaef253fb3_prof);

        
        $__internal_fc9af8635f65ddfe73479a9d5676117c5c4138e0ec6f44de645e9acd06cf7261->leave($__internal_fc9af8635f65ddfe73479a9d5676117c5c4138e0ec6f44de645e9acd06cf7261_prof);

    }

    // line 35
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f8d46a3c667b4cccb43085b794b3a7dc0b558326694dd6050841529f7b1fdcf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d46a3c667b4cccb43085b794b3a7dc0b558326694dd6050841529f7b1fdcf5->enter($__internal_f8d46a3c667b4cccb43085b794b3a7dc0b558326694dd6050841529f7b1fdcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_33d344e0c737cd15485567d16c2cc3532d01e13c1e1940e8dde8955889f01045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d344e0c737cd15485567d16c2cc3532d01e13c1e1940e8dde8955889f01045->enter($__internal_33d344e0c737cd15485567d16c2cc3532d01e13c1e1940e8dde8955889f01045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 36
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_33d344e0c737cd15485567d16c2cc3532d01e13c1e1940e8dde8955889f01045->leave($__internal_33d344e0c737cd15485567d16c2cc3532d01e13c1e1940e8dde8955889f01045_prof);

        
        $__internal_f8d46a3c667b4cccb43085b794b3a7dc0b558326694dd6050841529f7b1fdcf5->leave($__internal_f8d46a3c667b4cccb43085b794b3a7dc0b558326694dd6050841529f7b1fdcf5_prof);

    }

    // line 39
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_75bd6a3e745d5ef48bd6e15366cb869b44d35dc521f90282be4f25e4aec170e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75bd6a3e745d5ef48bd6e15366cb869b44d35dc521f90282be4f25e4aec170e9->enter($__internal_75bd6a3e745d5ef48bd6e15366cb869b44d35dc521f90282be4f25e4aec170e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_378a5a0b1a571010e1c9fe3de10718dca00fee51bc4a401fcb5f730936052063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378a5a0b1a571010e1c9fe3de10718dca00fee51bc4a401fcb5f730936052063->enter($__internal_378a5a0b1a571010e1c9fe3de10718dca00fee51bc4a401fcb5f730936052063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 40
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_378a5a0b1a571010e1c9fe3de10718dca00fee51bc4a401fcb5f730936052063->leave($__internal_378a5a0b1a571010e1c9fe3de10718dca00fee51bc4a401fcb5f730936052063_prof);

        
        $__internal_75bd6a3e745d5ef48bd6e15366cb869b44d35dc521f90282be4f25e4aec170e9->leave($__internal_75bd6a3e745d5ef48bd6e15366cb869b44d35dc521f90282be4f25e4aec170e9_prof);

    }

    // line 43
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_a159271e574814dceb87dc82d386928fda03a60a7997b1924c1c997f49cf8db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a159271e574814dceb87dc82d386928fda03a60a7997b1924c1c997f49cf8db2->enter($__internal_a159271e574814dceb87dc82d386928fda03a60a7997b1924c1c997f49cf8db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_0dffa0dea97c38426b5e6b81fd8ba292b7fd03d489075adea97487482e7eb98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dffa0dea97c38426b5e6b81fd8ba292b7fd03d489075adea97487482e7eb98f->enter($__internal_0dffa0dea97c38426b5e6b81fd8ba292b7fd03d489075adea97487482e7eb98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_0dffa0dea97c38426b5e6b81fd8ba292b7fd03d489075adea97487482e7eb98f->leave($__internal_0dffa0dea97c38426b5e6b81fd8ba292b7fd03d489075adea97487482e7eb98f_prof);

        
        $__internal_a159271e574814dceb87dc82d386928fda03a60a7997b1924c1c997f49cf8db2->leave($__internal_a159271e574814dceb87dc82d386928fda03a60a7997b1924c1c997f49cf8db2_prof);

    }

    // line 55
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_47602b1f002f3e5d02ea0241415e4f346752847c780007fdc47e997113b9a5ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47602b1f002f3e5d02ea0241415e4f346752847c780007fdc47e997113b9a5ff->enter($__internal_47602b1f002f3e5d02ea0241415e4f346752847c780007fdc47e997113b9a5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_0a1838fad3dd7efc76b6b86c9731a82178e03edf0b509f304cfb4037ce8c7a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1838fad3dd7efc76b6b86c9731a82178e03edf0b509f304cfb4037ce8c7a8a->enter($__internal_0a1838fad3dd7efc76b6b86c9731a82178e03edf0b509f304cfb4037ce8c7a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_0a1838fad3dd7efc76b6b86c9731a82178e03edf0b509f304cfb4037ce8c7a8a->leave($__internal_0a1838fad3dd7efc76b6b86c9731a82178e03edf0b509f304cfb4037ce8c7a8a_prof);

        
        $__internal_47602b1f002f3e5d02ea0241415e4f346752847c780007fdc47e997113b9a5ff->leave($__internal_47602b1f002f3e5d02ea0241415e4f346752847c780007fdc47e997113b9a5ff_prof);

    }

    // line 66
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_a535fb21a65611a60d78fd9c2a43f7b686271981a0fa6d7c51a688f11c48d9ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a535fb21a65611a60d78fd9c2a43f7b686271981a0fa6d7c51a688f11c48d9ae->enter($__internal_a535fb21a65611a60d78fd9c2a43f7b686271981a0fa6d7c51a688f11c48d9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_09092c3f9e43a3cdb1a0379d78daf0cec8330d0a9b20be07defbdc42304ce69d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09092c3f9e43a3cdb1a0379d78daf0cec8330d0a9b20be07defbdc42304ce69d->enter($__internal_09092c3f9e43a3cdb1a0379d78daf0cec8330d0a9b20be07defbdc42304ce69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_09092c3f9e43a3cdb1a0379d78daf0cec8330d0a9b20be07defbdc42304ce69d->leave($__internal_09092c3f9e43a3cdb1a0379d78daf0cec8330d0a9b20be07defbdc42304ce69d_prof);

        
        $__internal_a535fb21a65611a60d78fd9c2a43f7b686271981a0fa6d7c51a688f11c48d9ae->leave($__internal_a535fb21a65611a60d78fd9c2a43f7b686271981a0fa6d7c51a688f11c48d9ae_prof);

    }

    // line 77
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_71975e51efc9a912ad32724721bdfe920d3d631ec8f10fb796d8a6591fe9a0a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71975e51efc9a912ad32724721bdfe920d3d631ec8f10fb796d8a6591fe9a0a6->enter($__internal_71975e51efc9a912ad32724721bdfe920d3d631ec8f10fb796d8a6591fe9a0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_8d1fb69f9e363d4e60141c741cf6e8a2fe651d5bc9f8dca2a415942210b18d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1fb69f9e363d4e60141c741cf6e8a2fe651d5bc9f8dca2a415942210b18d13->enter($__internal_8d1fb69f9e363d4e60141c741cf6e8a2fe651d5bc9f8dca2a415942210b18d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 78
        echo "col-sm-6";
        
        $__internal_8d1fb69f9e363d4e60141c741cf6e8a2fe651d5bc9f8dca2a415942210b18d13->leave($__internal_8d1fb69f9e363d4e60141c741cf6e8a2fe651d5bc9f8dca2a415942210b18d13_prof);

        
        $__internal_71975e51efc9a912ad32724721bdfe920d3d631ec8f10fb796d8a6591fe9a0a6->leave($__internal_71975e51efc9a912ad32724721bdfe920d3d631ec8f10fb796d8a6591fe9a0a6_prof);

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
