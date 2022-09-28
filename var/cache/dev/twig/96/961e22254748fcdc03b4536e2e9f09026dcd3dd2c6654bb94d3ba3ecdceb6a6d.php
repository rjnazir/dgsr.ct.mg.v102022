<?php

/* form/fields.html.twig */
class __TwigTemplate_ca2dbfa2b5cd0a014afac1f1bfe9fed9e382c7d0026fc6b1e769097c3caa2b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_row' => array($this, 'block_form_row'),
            'number_widget' => array($this, 'block_number_widget'),
            'text_widget' => array($this, 'block_text_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'field_widget' => array($this, 'block_field_widget'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85a79987189d63ce329736933bcbb056398e03c8cfa8e4c872dc81bdf30e5ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a79987189d63ce329736933bcbb056398e03c8cfa8e4c872dc81bdf30e5ff4->enter($__internal_85a79987189d63ce329736933bcbb056398e03c8cfa8e4c872dc81bdf30e5ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        $__internal_c4187a374564cdc279610fa8e26b61b090547aee0895a7f1c2654b0347f606a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4187a374564cdc279610fa8e26b61b090547aee0895a7f1c2654b0347f606a7->enter($__internal_c4187a374564cdc279610fa8e26b61b090547aee0895a7f1c2654b0347f606a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 1
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('form_row', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('number_widget', $context, $blocks);
        // line 53
        echo "

";
        // line 55
        $this->displayBlock('text_widget', $context, $blocks);
        // line 60
        $this->displayBlock('email_widget', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('field_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 86
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 108
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 115
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        
        $__internal_85a79987189d63ce329736933bcbb056398e03c8cfa8e4c872dc81bdf30e5ff4->leave($__internal_85a79987189d63ce329736933bcbb056398e03c8cfa8e4c872dc81bdf30e5ff4_prof);

        
        $__internal_c4187a374564cdc279610fa8e26b61b090547aee0895a7f1c2654b0347f606a7->leave($__internal_c4187a374564cdc279610fa8e26b61b090547aee0895a7f1c2654b0347f606a7_prof);

    }

    // line 1
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_4ce22061aea91b51561b2079f4abff3ef4379924f8c6a8ae989d4988b94f3c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce22061aea91b51561b2079f4abff3ef4379924f8c6a8ae989d4988b94f3c07->enter($__internal_4ce22061aea91b51561b2079f4abff3ef4379924f8c6a8ae989d4988b94f3c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_59f2b10c0db633a988b5806732bc32542d63805bf4eb19fa2cbebae508067fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f2b10c0db633a988b5806732bc32542d63805bf4eb19fa2cbebae508067fc1->enter($__internal_59f2b10c0db633a988b5806732bc32542d63805bf4eb19fa2cbebae508067fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 2
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 3
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
            // line 4
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        ";
        }
        // line 6
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
    </div>
";
        
        $__internal_59f2b10c0db633a988b5806732bc32542d63805bf4eb19fa2cbebae508067fc1->leave($__internal_59f2b10c0db633a988b5806732bc32542d63805bf4eb19fa2cbebae508067fc1_prof);

        
        $__internal_4ce22061aea91b51561b2079f4abff3ef4379924f8c6a8ae989d4988b94f3c07->leave($__internal_4ce22061aea91b51561b2079f4abff3ef4379924f8c6a8ae989d4988b94f3c07_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_01fbdefe3eaaf1a2692c7fb7949d2ebbfc918b105f726105fbb344e4db9d7fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01fbdefe3eaaf1a2692c7fb7949d2ebbfc918b105f726105fbb344e4db9d7fda->enter($__internal_01fbdefe3eaaf1a2692c7fb7949d2ebbfc918b105f726105fbb344e4db9d7fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_304c0f61dd748381b773970c73ab0555bcc3990cdfd22f05091c53a8b6ef9bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304c0f61dd748381b773970c73ab0555bcc3990cdfd22f05091c53a8b6ef9bd5->enter($__internal_304c0f61dd748381b773970c73ab0555bcc3990cdfd22f05091c53a8b6ef9bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 14
        if ((($context["type"] ?? $this->getContext($context, "type")) == "file")) {
            // line 15
            echo "        <input class=\"inputfile\" type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo "  />
        ";
            // line 17
            echo "    ";
        } else {
            // line 19
            echo "            <input type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo "/>
";
            // line 21
            echo "
    ";
        }
        // line 23
        echo "
";
        
        $__internal_304c0f61dd748381b773970c73ab0555bcc3990cdfd22f05091c53a8b6ef9bd5->leave($__internal_304c0f61dd748381b773970c73ab0555bcc3990cdfd22f05091c53a8b6ef9bd5_prof);

        
        $__internal_01fbdefe3eaaf1a2692c7fb7949d2ebbfc918b105f726105fbb344e4db9d7fda->leave($__internal_01fbdefe3eaaf1a2692c7fb7949d2ebbfc918b105f726105fbb344e4db9d7fda_prof);

    }

    // line 26
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3d49e431a93a40fd867c5c54cd633c6499987ea2971ca852c769a51f3f98b642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d49e431a93a40fd867c5c54cd633c6499987ea2971ca852c769a51f3f98b642->enter($__internal_3d49e431a93a40fd867c5c54cd633c6499987ea2971ca852c769a51f3f98b642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_95e27f9e4ffe81ebe25c55fe8549ba8e78a80dbbd9c26b87fb5de911ddc83bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e27f9e4ffe81ebe25c55fe8549ba8e78a80dbbd9c26b87fb5de911ddc83bf7->enter($__internal_95e27f9e4ffe81ebe25c55fe8549ba8e78a80dbbd9c26b87fb5de911ddc83bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 27
        ob_start();
        // line 28
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 29
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 30
            echo "        <div class=\"form-group\">
";
            // line 32
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "
";
            // line 34
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
            echo "
        </div>
    ";
        } else {
            // line 37
            echo "        <div class=\"form-group\">
";
            // line 39
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "
";
            // line 41
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
            echo "
        </div>
    ";
        }
        // line 44
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_95e27f9e4ffe81ebe25c55fe8549ba8e78a80dbbd9c26b87fb5de911ddc83bf7->leave($__internal_95e27f9e4ffe81ebe25c55fe8549ba8e78a80dbbd9c26b87fb5de911ddc83bf7_prof);

        
        $__internal_3d49e431a93a40fd867c5c54cd633c6499987ea2971ca852c769a51f3f98b642->leave($__internal_3d49e431a93a40fd867c5c54cd633c6499987ea2971ca852c769a51f3f98b642_prof);

    }

    // line 48
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_e046fdfd6356f9385ad63b8459d3fd9ad350aaab26a08652f0379925ced66482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e046fdfd6356f9385ad63b8459d3fd9ad350aaab26a08652f0379925ced66482->enter($__internal_e046fdfd6356f9385ad63b8459d3fd9ad350aaab26a08652f0379925ced66482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_0ce2c50743d71d3dd9fadf5535f7a3de2bcfae764cfed8f10a319b7db6081e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce2c50743d71d3dd9fadf5535f7a3de2bcfae764cfed8f10a319b7db6081e15->enter($__internal_0ce2c50743d71d3dd9fadf5535f7a3de2bcfae764cfed8f10a319b7db6081e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 50
        echo "            <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
";
        
        $__internal_0ce2c50743d71d3dd9fadf5535f7a3de2bcfae764cfed8f10a319b7db6081e15->leave($__internal_0ce2c50743d71d3dd9fadf5535f7a3de2bcfae764cfed8f10a319b7db6081e15_prof);

        
        $__internal_e046fdfd6356f9385ad63b8459d3fd9ad350aaab26a08652f0379925ced66482->leave($__internal_e046fdfd6356f9385ad63b8459d3fd9ad350aaab26a08652f0379925ced66482_prof);

    }

    // line 55
    public function block_text_widget($context, array $blocks = array())
    {
        $__internal_9575130109e04eb8c8c91fcc7cef255923709d0bdc9e74129f98fd4b09dfdd23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9575130109e04eb8c8c91fcc7cef255923709d0bdc9e74129f98fd4b09dfdd23->enter($__internal_9575130109e04eb8c8c91fcc7cef255923709d0bdc9e74129f98fd4b09dfdd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_6b5d0fe20fd9a85a8c55bedc90e710e69d8c14ed6a43826c79d0203e3a8237e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5d0fe20fd9a85a8c55bedc90e710e69d8c14ed6a43826c79d0203e3a8237e8->enter($__internal_6b5d0fe20fd9a85a8c55bedc90e710e69d8c14ed6a43826c79d0203e3a8237e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        // line 57
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\" />
";
        
        $__internal_6b5d0fe20fd9a85a8c55bedc90e710e69d8c14ed6a43826c79d0203e3a8237e8->leave($__internal_6b5d0fe20fd9a85a8c55bedc90e710e69d8c14ed6a43826c79d0203e3a8237e8_prof);

        
        $__internal_9575130109e04eb8c8c91fcc7cef255923709d0bdc9e74129f98fd4b09dfdd23->leave($__internal_9575130109e04eb8c8c91fcc7cef255923709d0bdc9e74129f98fd4b09dfdd23_prof);

    }

    // line 60
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_a0a5349db1836a8fbd58bea799b7a02d5e32ca128eea151dc40a3a71b3c1af31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a5349db1836a8fbd58bea799b7a02d5e32ca128eea151dc40a3a71b3c1af31->enter($__internal_a0a5349db1836a8fbd58bea799b7a02d5e32ca128eea151dc40a3a71b3c1af31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_dcc856f520c43251b3932ee10574fa00d7949913593bdeb29f00f4af643c51bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc856f520c43251b3932ee10574fa00d7949913593bdeb29f00f4af643c51bf->enter($__internal_dcc856f520c43251b3932ee10574fa00d7949913593bdeb29f00f4af643c51bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 62
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\"/>
";
        
        $__internal_dcc856f520c43251b3932ee10574fa00d7949913593bdeb29f00f4af643c51bf->leave($__internal_dcc856f520c43251b3932ee10574fa00d7949913593bdeb29f00f4af643c51bf_prof);

        
        $__internal_a0a5349db1836a8fbd58bea799b7a02d5e32ca128eea151dc40a3a71b3c1af31->leave($__internal_a0a5349db1836a8fbd58bea799b7a02d5e32ca128eea151dc40a3a71b3c1af31_prof);

    }

    // line 66
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_aa5200fbcf686cff2c3bb4199de315741fa641987784c46edbd44d1af37a1467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5200fbcf686cff2c3bb4199de315741fa641987784c46edbd44d1af37a1467->enter($__internal_aa5200fbcf686cff2c3bb4199de315741fa641987784c46edbd44d1af37a1467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_68068bfa3e604a101b62c0adbdcb06eb7ba75467b0fc6bd7117c13a48eabe95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68068bfa3e604a101b62c0adbdcb06eb7ba75467b0fc6bd7117c13a48eabe95d->enter($__internal_68068bfa3e604a101b62c0adbdcb06eb7ba75467b0fc6bd7117c13a48eabe95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 68
        echo "        <input oninvalid=\"setErrorClass(\$(this));\" class=\"checkbox-custom-style\" type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_68068bfa3e604a101b62c0adbdcb06eb7ba75467b0fc6bd7117c13a48eabe95d->leave($__internal_68068bfa3e604a101b62c0adbdcb06eb7ba75467b0fc6bd7117c13a48eabe95d_prof);

        
        $__internal_aa5200fbcf686cff2c3bb4199de315741fa641987784c46edbd44d1af37a1467->leave($__internal_aa5200fbcf686cff2c3bb4199de315741fa641987784c46edbd44d1af37a1467_prof);

    }

    // line 72
    public function block_field_widget($context, array $blocks = array())
    {
        $__internal_0df5fa7aebe617a54729af0ae9a4a75fce7521011ad2eeda4538433965a92e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df5fa7aebe617a54729af0ae9a4a75fce7521011ad2eeda4538433965a92e24->enter($__internal_0df5fa7aebe617a54729af0ae9a4a75fce7521011ad2eeda4538433965a92e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        $__internal_91606396369c551e839cf10f1e5fabaf96c79c0e75a94a3fee3f038d101cfb7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91606396369c551e839cf10f1e5fabaf96c79c0e75a94a3fee3f038d101cfb7d->enter($__internal_91606396369c551e839cf10f1e5fabaf96c79c0e75a94a3fee3f038d101cfb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        // line 73
        echo "    <div class=\"text_widget2\">
        <input oninvalid=\"setErrorClass(\$(this));\" type=\"text\" ";
        // line 74
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
    </div>
";
        
        $__internal_91606396369c551e839cf10f1e5fabaf96c79c0e75a94a3fee3f038d101cfb7d->leave($__internal_91606396369c551e839cf10f1e5fabaf96c79c0e75a94a3fee3f038d101cfb7d_prof);

        
        $__internal_0df5fa7aebe617a54729af0ae9a4a75fce7521011ad2eeda4538433965a92e24->leave($__internal_0df5fa7aebe617a54729af0ae9a4a75fce7521011ad2eeda4538433965a92e24_prof);

    }

    // line 78
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_81f657d2ea5ca8e028e42bb9d6a99deb80d7b96b790038a8b6f8bff8e87f524f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f657d2ea5ca8e028e42bb9d6a99deb80d7b96b790038a8b6f8bff8e87f524f->enter($__internal_81f657d2ea5ca8e028e42bb9d6a99deb80d7b96b790038a8b6f8bff8e87f524f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_c15985dc15178a21ed1d7b0980908bf4dd377035bf17d35b0905897b3cddded5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15985dc15178a21ed1d7b0980908bf4dd377035bf17d35b0905897b3cddded5->enter($__internal_c15985dc15178a21ed1d7b0980908bf4dd377035bf17d35b0905897b3cddded5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 79
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 80
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'widget')));
            // line 81
            echo "    ";
        }
        // line 82
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
        
        $__internal_c15985dc15178a21ed1d7b0980908bf4dd377035bf17d35b0905897b3cddded5->leave($__internal_c15985dc15178a21ed1d7b0980908bf4dd377035bf17d35b0905897b3cddded5_prof);

        
        $__internal_81f657d2ea5ca8e028e42bb9d6a99deb80d7b96b790038a8b6f8bff8e87f524f->leave($__internal_81f657d2ea5ca8e028e42bb9d6a99deb80d7b96b790038a8b6f8bff8e87f524f_prof);

    }

    // line 86
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d112ab2ab435a90e3249a296ad6410732f5877cf1ef72aa0192ecece496a57e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d112ab2ab435a90e3249a296ad6410732f5877cf1ef72aa0192ecece496a57e2->enter($__internal_d112ab2ab435a90e3249a296ad6410732f5877cf1ef72aa0192ecece496a57e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1953b5dfc8539b064a2616904470a14013bf7f74fcaffbdbf3b0177c18399c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1953b5dfc8539b064a2616904470a14013bf7f74fcaffbdbf3b0177c18399c08->enter($__internal_1953b5dfc8539b064a2616904470a14013bf7f74fcaffbdbf3b0177c18399c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 87
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 88
            $context["required"] = false;
        }
        // line 91
        echo "<select oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 92
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 93
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 95
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 96
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 97
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 98
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 99
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 102
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 103
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 104
        echo "</select>
";
        
        $__internal_1953b5dfc8539b064a2616904470a14013bf7f74fcaffbdbf3b0177c18399c08->leave($__internal_1953b5dfc8539b064a2616904470a14013bf7f74fcaffbdbf3b0177c18399c08_prof);

        
        $__internal_d112ab2ab435a90e3249a296ad6410732f5877cf1ef72aa0192ecece496a57e2->leave($__internal_d112ab2ab435a90e3249a296ad6410732f5877cf1ef72aa0192ecece496a57e2_prof);

    }

    // line 108
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_1e60857d75fc03362cb8c4c9cc84e2799e3aea39a7a4aae3afbbb9bd567675ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e60857d75fc03362cb8c4c9cc84e2799e3aea39a7a4aae3afbbb9bd567675ad->enter($__internal_1e60857d75fc03362cb8c4c9cc84e2799e3aea39a7a4aae3afbbb9bd567675ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_76e0fe03157b9c387f02eccf6f01ebaf73f38d2bde2f01385583552cff7397fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e0fe03157b9c387f02eccf6f01ebaf73f38d2bde2f01385583552cff7397fe->enter($__internal_76e0fe03157b9c387f02eccf6f01ebaf73f38d2bde2f01385583552cff7397fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 110
        echo "        <textarea oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        
        $__internal_76e0fe03157b9c387f02eccf6f01ebaf73f38d2bde2f01385583552cff7397fe->leave($__internal_76e0fe03157b9c387f02eccf6f01ebaf73f38d2bde2f01385583552cff7397fe_prof);

        
        $__internal_1e60857d75fc03362cb8c4c9cc84e2799e3aea39a7a4aae3afbbb9bd567675ad->leave($__internal_1e60857d75fc03362cb8c4c9cc84e2799e3aea39a7a4aae3afbbb9bd567675ad_prof);

    }

    // line 115
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_10ab3ae8df9909800091a4ecf68b8bb54f92056e562982d52129a29b5d85ecc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ab3ae8df9909800091a4ecf68b8bb54f92056e562982d52129a29b5d85ecc5->enter($__internal_10ab3ae8df9909800091a4ecf68b8bb54f92056e562982d52129a29b5d85ecc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6217acf8ff5e61e6d23bafe806866ba462f45638e0b4ef094dbe002a86e797fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6217acf8ff5e61e6d23bafe806866ba462f45638e0b4ef094dbe002a86e797fc->enter($__internal_6217acf8ff5e61e6d23bafe806866ba462f45638e0b4ef094dbe002a86e797fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 116
        echo "<div class=\"col-sm-10\">";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 118
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 119
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "</div>";
        
        $__internal_6217acf8ff5e61e6d23bafe806866ba462f45638e0b4ef094dbe002a86e797fc->leave($__internal_6217acf8ff5e61e6d23bafe806866ba462f45638e0b4ef094dbe002a86e797fc_prof);

        
        $__internal_10ab3ae8df9909800091a4ecf68b8bb54f92056e562982d52129a29b5d85ecc5->leave($__internal_10ab3ae8df9909800091a4ecf68b8bb54f92056e562982d52129a29b5d85ecc5_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  513 => 121,  507 => 119,  505 => 118,  501 => 117,  499 => 116,  490 => 115,  475 => 110,  466 => 108,  455 => 104,  453 => 103,  451 => 102,  445 => 99,  443 => 98,  441 => 97,  439 => 96,  437 => 95,  428 => 93,  426 => 92,  419 => 91,  416 => 88,  414 => 87,  405 => 86,  392 => 82,  389 => 81,  386 => 80,  383 => 79,  374 => 78,  359 => 74,  356 => 73,  347 => 72,  326 => 68,  317 => 66,  302 => 62,  293 => 60,  278 => 57,  269 => 55,  254 => 50,  245 => 48,  233 => 44,  226 => 41,  221 => 39,  218 => 37,  211 => 34,  206 => 32,  203 => 30,  201 => 29,  199 => 28,  197 => 27,  188 => 26,  177 => 23,  173 => 21,  160 => 19,  157 => 17,  144 => 15,  142 => 14,  140 => 12,  131 => 11,  118 => 7,  113 => 6,  107 => 4,  105 => 3,  100 => 2,  91 => 1,  81 => 115,  79 => 108,  77 => 86,  75 => 78,  72 => 77,  70 => 72,  67 => 71,  65 => 66,  62 => 65,  60 => 60,  58 => 55,  54 => 53,  52 => 48,  49 => 47,  47 => 26,  44 => 25,  42 => 11,  39 => 10,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form_widget_compound %}
    <div {{ block('widget_container_attributes') }}>
        {% if form.parent is empty %}
            {{ form_errors(form) }}
        {% endif %}
        {{ block('form_rows') }}
        {{ form_rest(form) }}
    </div>
{% endblock form_widget_compound %}

{% block form_widget_simple %}
    {%- set type = type|default('text') -%}

    {% if type == 'file' %}
        <input class=\"inputfile\" type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}  />
        {#<label for=\"file\" class=\"inputfile-text btn btn-primary\" onclick=\"\$(this).prev().trigger('click');\">Choose a file</label>#}
    {% else %}
{#        <div class=\"col-sm-10 \">#}
            <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{#        </div>#}

    {% endif %}

{% endblock form_widget_simple %}

{% block form_row %}
{% spaceless %}
    {%- set attr = attr|merge( {'class': (attr.class|default('') ~ ' form-control')|trim }) -%}
    {% if compound %}
        <div class=\"form-group\">
{#            {{ form_label(form, \"\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}#}
            {{ form_label(form) }}
{#            {{ form_errors(form) }}#}
            {{ form_widget(form, {'attr': attr}) }}
        </div>
    {% else %}
        <div class=\"form-group\">
{#            {{ form_label(form, \"\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}#}
            {{ form_label(form) }}
{#            {{ form_errors(form) }}#}
            {{ form_widget(form, {'attr': attr}) }}
        </div>
    {% endif %}

{% endspaceless %}
{% endblock form_row %}

{% block number_widget %}
{#        <div class=\"col-sm-10\">#}
            <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" {{ block('widget_attributes') }} value=\"{{ value }}\" />
{#        </div>#}
{% endblock %}


{% block text_widget %}
{#    <div class=\"col-sm-10\">#}
        <input type=\"text\" {{ block('widget_attributes') }} value=\"{{ value }}\" oninvalid=\"setErrorClass(\$(this));\" />
{#    </div>#}
{% endblock %}
{% block email_widget %}
{#    <div class=\"col-sm-10\">#}
        <input type=\"text\" {{ block('widget_attributes') }} value=\"{{ value }}\" oninvalid=\"setErrorClass(\$(this));\"/>
{#    </div>#}
{% endblock %}

{% block checkbox_widget %}
{#    <div class=\"col-sm-10\">#}
        <input oninvalid=\"setErrorClass(\$(this));\" class=\"checkbox-custom-style\" type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{#    </div>#}
{% endblock checkbox_widget %}

{% block field_widget %}
    <div class=\"text_widget2\">
        <input oninvalid=\"setErrorClass(\$(this));\" type=\"text\" {{ block('widget_attributes') }} value=\"{{ value }}\" />
    </div>
{% endblock field_widget %}

{% block collection_widget %}
    {% if prototype is defined %}
        {% set attr = attr|merge({'data-prototype': form_widget(prototype) }) %}
    {% endif %}
    {{ block('form_widget') }}
{% endblock collection_widget %}


{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
{#    <div class=\"col-sm-10\">#}
<select oninvalid=\"setErrorClass(\$(this));\" {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
            {%- if placeholder is not none -%}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? placeholder|trans({}, translation_domain) }}</option>
            {%- endif -%}
            {%- if preferred_choices|length > 0 -%}
                {% set options = preferred_choices %}
                {{- block('choice_widget_options') -}}
                {%- if choices|length > 0 and separator is not none -%}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {%- endif -%}
            {%- endif -%}
            {%- set options = choices -%}
            {{- block('choice_widget_options') -}}
        </select>
{#    </div>#}
{%- endblock choice_widget_collapsed -%}

{%- block textarea_widget -%}
{#    <div class=\"col-sm-10\">#}
        <textarea oninvalid=\"setErrorClass(\$(this));\" {{ block('widget_attributes') }}>{{ value }}</textarea>
{#    </div>#}
{%- endblock textarea_widget -%}


{%- block choice_widget_expanded -%}
    <div class=\"col-sm-10\">
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}", "form/fields.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app\\Resources\\views\\form\\fields.html.twig");
    }
}
