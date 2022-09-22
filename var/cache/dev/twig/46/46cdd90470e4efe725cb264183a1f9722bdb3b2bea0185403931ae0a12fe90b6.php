<?php

/* :form:fields.html.twig */
class __TwigTemplate_629044242f7314346338c248b8bddf8caeaa78415bbad954b1c9520d2081fd5d extends Twig_Template
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
        $__internal_b4090a7d0a05ebf4b1be32f09c9a71c65f06ab0e0fe94a852a851a278fe8a188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4090a7d0a05ebf4b1be32f09c9a71c65f06ab0e0fe94a852a851a278fe8a188->enter($__internal_b4090a7d0a05ebf4b1be32f09c9a71c65f06ab0e0fe94a852a851a278fe8a188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:fields.html.twig"));

        $__internal_1d7bbbb530d2e4a7c69844c70c490286849b98253b58f7ddcaae9d5ae9f1b67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7bbbb530d2e4a7c69844c70c490286849b98253b58f7ddcaae9d5ae9f1b67c->enter($__internal_1d7bbbb530d2e4a7c69844c70c490286849b98253b58f7ddcaae9d5ae9f1b67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:fields.html.twig"));

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
        
        $__internal_b4090a7d0a05ebf4b1be32f09c9a71c65f06ab0e0fe94a852a851a278fe8a188->leave($__internal_b4090a7d0a05ebf4b1be32f09c9a71c65f06ab0e0fe94a852a851a278fe8a188_prof);

        
        $__internal_1d7bbbb530d2e4a7c69844c70c490286849b98253b58f7ddcaae9d5ae9f1b67c->leave($__internal_1d7bbbb530d2e4a7c69844c70c490286849b98253b58f7ddcaae9d5ae9f1b67c_prof);

    }

    // line 1
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_d9f16b8b257670a09f48078aaaaf8038885fd122124d02600771522f2c0c1389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f16b8b257670a09f48078aaaaf8038885fd122124d02600771522f2c0c1389->enter($__internal_d9f16b8b257670a09f48078aaaaf8038885fd122124d02600771522f2c0c1389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_d25596efd38b5a469ef1d64f3d7e2675802c979d13f1a1a1acbde4fd670f0bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25596efd38b5a469ef1d64f3d7e2675802c979d13f1a1a1acbde4fd670f0bd4->enter($__internal_d25596efd38b5a469ef1d64f3d7e2675802c979d13f1a1a1acbde4fd670f0bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_d25596efd38b5a469ef1d64f3d7e2675802c979d13f1a1a1acbde4fd670f0bd4->leave($__internal_d25596efd38b5a469ef1d64f3d7e2675802c979d13f1a1a1acbde4fd670f0bd4_prof);

        
        $__internal_d9f16b8b257670a09f48078aaaaf8038885fd122124d02600771522f2c0c1389->leave($__internal_d9f16b8b257670a09f48078aaaaf8038885fd122124d02600771522f2c0c1389_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b82c5e57f62ce7b6e72ef31e345c51e4ab85385f36217531b3e4d2ac99832b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82c5e57f62ce7b6e72ef31e345c51e4ab85385f36217531b3e4d2ac99832b82->enter($__internal_b82c5e57f62ce7b6e72ef31e345c51e4ab85385f36217531b3e4d2ac99832b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_90d643668b5a113d8825220abd27f2dfad2b2ccdf1a03828de6e58782f94590d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d643668b5a113d8825220abd27f2dfad2b2ccdf1a03828de6e58782f94590d->enter($__internal_90d643668b5a113d8825220abd27f2dfad2b2ccdf1a03828de6e58782f94590d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_90d643668b5a113d8825220abd27f2dfad2b2ccdf1a03828de6e58782f94590d->leave($__internal_90d643668b5a113d8825220abd27f2dfad2b2ccdf1a03828de6e58782f94590d_prof);

        
        $__internal_b82c5e57f62ce7b6e72ef31e345c51e4ab85385f36217531b3e4d2ac99832b82->leave($__internal_b82c5e57f62ce7b6e72ef31e345c51e4ab85385f36217531b3e4d2ac99832b82_prof);

    }

    // line 26
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3d286435997ea0c7ec8bcabbb9fc0effc320a77411af809e4b65aae1c374eba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d286435997ea0c7ec8bcabbb9fc0effc320a77411af809e4b65aae1c374eba8->enter($__internal_3d286435997ea0c7ec8bcabbb9fc0effc320a77411af809e4b65aae1c374eba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_13f3bdc614d2ca84ec83bb7c830b6bebd9e090395f11d332c063f7f821d2172e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f3bdc614d2ca84ec83bb7c830b6bebd9e090395f11d332c063f7f821d2172e->enter($__internal_13f3bdc614d2ca84ec83bb7c830b6bebd9e090395f11d332c063f7f821d2172e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_13f3bdc614d2ca84ec83bb7c830b6bebd9e090395f11d332c063f7f821d2172e->leave($__internal_13f3bdc614d2ca84ec83bb7c830b6bebd9e090395f11d332c063f7f821d2172e_prof);

        
        $__internal_3d286435997ea0c7ec8bcabbb9fc0effc320a77411af809e4b65aae1c374eba8->leave($__internal_3d286435997ea0c7ec8bcabbb9fc0effc320a77411af809e4b65aae1c374eba8_prof);

    }

    // line 48
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_4f47bdc92c7fcd4e1e3b365b03aeb1bf037a4319c4f83396d01972defbd0d360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f47bdc92c7fcd4e1e3b365b03aeb1bf037a4319c4f83396d01972defbd0d360->enter($__internal_4f47bdc92c7fcd4e1e3b365b03aeb1bf037a4319c4f83396d01972defbd0d360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_99009875e8b8ee99362d9491b8db2a7796061f2b7b01a7d887d96d1e0b14c116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99009875e8b8ee99362d9491b8db2a7796061f2b7b01a7d887d96d1e0b14c116->enter($__internal_99009875e8b8ee99362d9491b8db2a7796061f2b7b01a7d887d96d1e0b14c116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 50
        echo "            <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
";
        
        $__internal_99009875e8b8ee99362d9491b8db2a7796061f2b7b01a7d887d96d1e0b14c116->leave($__internal_99009875e8b8ee99362d9491b8db2a7796061f2b7b01a7d887d96d1e0b14c116_prof);

        
        $__internal_4f47bdc92c7fcd4e1e3b365b03aeb1bf037a4319c4f83396d01972defbd0d360->leave($__internal_4f47bdc92c7fcd4e1e3b365b03aeb1bf037a4319c4f83396d01972defbd0d360_prof);

    }

    // line 55
    public function block_text_widget($context, array $blocks = array())
    {
        $__internal_87aff4371c6b1a1de06334f4e8b2231e936173630afd63faa18ca4134ea78195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87aff4371c6b1a1de06334f4e8b2231e936173630afd63faa18ca4134ea78195->enter($__internal_87aff4371c6b1a1de06334f4e8b2231e936173630afd63faa18ca4134ea78195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_062742dcd2c8c69c61df7375d788b4bc211229c24b155c2063a227a85e5430cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062742dcd2c8c69c61df7375d788b4bc211229c24b155c2063a227a85e5430cd->enter($__internal_062742dcd2c8c69c61df7375d788b4bc211229c24b155c2063a227a85e5430cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        // line 57
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\" />
";
        
        $__internal_062742dcd2c8c69c61df7375d788b4bc211229c24b155c2063a227a85e5430cd->leave($__internal_062742dcd2c8c69c61df7375d788b4bc211229c24b155c2063a227a85e5430cd_prof);

        
        $__internal_87aff4371c6b1a1de06334f4e8b2231e936173630afd63faa18ca4134ea78195->leave($__internal_87aff4371c6b1a1de06334f4e8b2231e936173630afd63faa18ca4134ea78195_prof);

    }

    // line 60
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_b896b2aa258094c0ee83b5bc0f76cf462dfbee4a40d16efa9635aae5a15d69b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b896b2aa258094c0ee83b5bc0f76cf462dfbee4a40d16efa9635aae5a15d69b5->enter($__internal_b896b2aa258094c0ee83b5bc0f76cf462dfbee4a40d16efa9635aae5a15d69b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_da671d989717c8fdef09a85ec4299c07b2997db7d833b3d7b1729db5f48708ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da671d989717c8fdef09a85ec4299c07b2997db7d833b3d7b1729db5f48708ee->enter($__internal_da671d989717c8fdef09a85ec4299c07b2997db7d833b3d7b1729db5f48708ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 62
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\"/>
";
        
        $__internal_da671d989717c8fdef09a85ec4299c07b2997db7d833b3d7b1729db5f48708ee->leave($__internal_da671d989717c8fdef09a85ec4299c07b2997db7d833b3d7b1729db5f48708ee_prof);

        
        $__internal_b896b2aa258094c0ee83b5bc0f76cf462dfbee4a40d16efa9635aae5a15d69b5->leave($__internal_b896b2aa258094c0ee83b5bc0f76cf462dfbee4a40d16efa9635aae5a15d69b5_prof);

    }

    // line 66
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_be19286799a27363bbde512f523e1b3cf4482580e014846277784f9b1fd6e9e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be19286799a27363bbde512f523e1b3cf4482580e014846277784f9b1fd6e9e2->enter($__internal_be19286799a27363bbde512f523e1b3cf4482580e014846277784f9b1fd6e9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9a689fec018dea3f6cd0593ce05f86699c07c11e5e19c2edc54fcf4b82a6d47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a689fec018dea3f6cd0593ce05f86699c07c11e5e19c2edc54fcf4b82a6d47e->enter($__internal_9a689fec018dea3f6cd0593ce05f86699c07c11e5e19c2edc54fcf4b82a6d47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_9a689fec018dea3f6cd0593ce05f86699c07c11e5e19c2edc54fcf4b82a6d47e->leave($__internal_9a689fec018dea3f6cd0593ce05f86699c07c11e5e19c2edc54fcf4b82a6d47e_prof);

        
        $__internal_be19286799a27363bbde512f523e1b3cf4482580e014846277784f9b1fd6e9e2->leave($__internal_be19286799a27363bbde512f523e1b3cf4482580e014846277784f9b1fd6e9e2_prof);

    }

    // line 72
    public function block_field_widget($context, array $blocks = array())
    {
        $__internal_85ac351fe520c2db1206377b039bda864e5aede2fd7c7b2b22e75fa7ade69e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ac351fe520c2db1206377b039bda864e5aede2fd7c7b2b22e75fa7ade69e08->enter($__internal_85ac351fe520c2db1206377b039bda864e5aede2fd7c7b2b22e75fa7ade69e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        $__internal_e4ddb15fd498822ab82698edae402163da649eb3bc405f092c4696c79dc7cde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ddb15fd498822ab82698edae402163da649eb3bc405f092c4696c79dc7cde7->enter($__internal_e4ddb15fd498822ab82698edae402163da649eb3bc405f092c4696c79dc7cde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

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
        
        $__internal_e4ddb15fd498822ab82698edae402163da649eb3bc405f092c4696c79dc7cde7->leave($__internal_e4ddb15fd498822ab82698edae402163da649eb3bc405f092c4696c79dc7cde7_prof);

        
        $__internal_85ac351fe520c2db1206377b039bda864e5aede2fd7c7b2b22e75fa7ade69e08->leave($__internal_85ac351fe520c2db1206377b039bda864e5aede2fd7c7b2b22e75fa7ade69e08_prof);

    }

    // line 78
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_1e4bfdf62199d70c0b3796fedefc56032d31944534b58db315054006baf791ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4bfdf62199d70c0b3796fedefc56032d31944534b58db315054006baf791ba->enter($__internal_1e4bfdf62199d70c0b3796fedefc56032d31944534b58db315054006baf791ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_938a519ea5e86329fbce89a1f2485bb6eb92e5292b478db5862018c4c76375b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938a519ea5e86329fbce89a1f2485bb6eb92e5292b478db5862018c4c76375b8->enter($__internal_938a519ea5e86329fbce89a1f2485bb6eb92e5292b478db5862018c4c76375b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

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
        
        $__internal_938a519ea5e86329fbce89a1f2485bb6eb92e5292b478db5862018c4c76375b8->leave($__internal_938a519ea5e86329fbce89a1f2485bb6eb92e5292b478db5862018c4c76375b8_prof);

        
        $__internal_1e4bfdf62199d70c0b3796fedefc56032d31944534b58db315054006baf791ba->leave($__internal_1e4bfdf62199d70c0b3796fedefc56032d31944534b58db315054006baf791ba_prof);

    }

    // line 86
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_33ba4e18365146beb314c59af20b8644d4c6351940556f42ca405a459ee786cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ba4e18365146beb314c59af20b8644d4c6351940556f42ca405a459ee786cc->enter($__internal_33ba4e18365146beb314c59af20b8644d4c6351940556f42ca405a459ee786cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_652007d7902dfa7c3621a8ab7e525c2df9b8fef0bad24d388d0d232f7600d670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652007d7902dfa7c3621a8ab7e525c2df9b8fef0bad24d388d0d232f7600d670->enter($__internal_652007d7902dfa7c3621a8ab7e525c2df9b8fef0bad24d388d0d232f7600d670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_652007d7902dfa7c3621a8ab7e525c2df9b8fef0bad24d388d0d232f7600d670->leave($__internal_652007d7902dfa7c3621a8ab7e525c2df9b8fef0bad24d388d0d232f7600d670_prof);

        
        $__internal_33ba4e18365146beb314c59af20b8644d4c6351940556f42ca405a459ee786cc->leave($__internal_33ba4e18365146beb314c59af20b8644d4c6351940556f42ca405a459ee786cc_prof);

    }

    // line 108
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_1cd27b6393c9487315afb2f2264c88002ef2388e7a1205a6a261f27f6bfb5c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd27b6393c9487315afb2f2264c88002ef2388e7a1205a6a261f27f6bfb5c13->enter($__internal_1cd27b6393c9487315afb2f2264c88002ef2388e7a1205a6a261f27f6bfb5c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_fb9f95d38a17738302c21585606850948dda13c039725343a882366c86b40d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9f95d38a17738302c21585606850948dda13c039725343a882366c86b40d8a->enter($__internal_fb9f95d38a17738302c21585606850948dda13c039725343a882366c86b40d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 110
        echo "        <textarea oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        
        $__internal_fb9f95d38a17738302c21585606850948dda13c039725343a882366c86b40d8a->leave($__internal_fb9f95d38a17738302c21585606850948dda13c039725343a882366c86b40d8a_prof);

        
        $__internal_1cd27b6393c9487315afb2f2264c88002ef2388e7a1205a6a261f27f6bfb5c13->leave($__internal_1cd27b6393c9487315afb2f2264c88002ef2388e7a1205a6a261f27f6bfb5c13_prof);

    }

    // line 115
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_6cd5e187fe0762e7ca66b03e2b3f17dd460da5e157bf5541ce68cacf3a751f34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd5e187fe0762e7ca66b03e2b3f17dd460da5e157bf5541ce68cacf3a751f34->enter($__internal_6cd5e187fe0762e7ca66b03e2b3f17dd460da5e157bf5541ce68cacf3a751f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_e18fa876c2e03aa7a18b92654304f88a370d200044e0c2de6897d5e016f2cc12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18fa876c2e03aa7a18b92654304f88a370d200044e0c2de6897d5e016f2cc12->enter($__internal_e18fa876c2e03aa7a18b92654304f88a370d200044e0c2de6897d5e016f2cc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_e18fa876c2e03aa7a18b92654304f88a370d200044e0c2de6897d5e016f2cc12->leave($__internal_e18fa876c2e03aa7a18b92654304f88a370d200044e0c2de6897d5e016f2cc12_prof);

        
        $__internal_6cd5e187fe0762e7ca66b03e2b3f17dd460da5e157bf5541ce68cacf3a751f34->leave($__internal_6cd5e187fe0762e7ca66b03e2b3f17dd460da5e157bf5541ce68cacf3a751f34_prof);

    }

    public function getTemplateName()
    {
        return ":form:fields.html.twig";
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
{%- endblock choice_widget_expanded -%}", ":form:fields.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app/Resources\\views/form/fields.html.twig");
    }
}
