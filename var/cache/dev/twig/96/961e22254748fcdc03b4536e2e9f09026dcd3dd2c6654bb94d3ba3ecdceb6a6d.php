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
        $__internal_82a1c38120e3d5fbe945fbb7a40dae36721b8174977f358124cef7660a22be1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a1c38120e3d5fbe945fbb7a40dae36721b8174977f358124cef7660a22be1c->enter($__internal_82a1c38120e3d5fbe945fbb7a40dae36721b8174977f358124cef7660a22be1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        $__internal_4089235262ed6e24cd473617c23d826963fb1a4f5c900e113f610c64728335a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4089235262ed6e24cd473617c23d826963fb1a4f5c900e113f610c64728335a0->enter($__internal_4089235262ed6e24cd473617c23d826963fb1a4f5c900e113f610c64728335a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

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
        
        $__internal_82a1c38120e3d5fbe945fbb7a40dae36721b8174977f358124cef7660a22be1c->leave($__internal_82a1c38120e3d5fbe945fbb7a40dae36721b8174977f358124cef7660a22be1c_prof);

        
        $__internal_4089235262ed6e24cd473617c23d826963fb1a4f5c900e113f610c64728335a0->leave($__internal_4089235262ed6e24cd473617c23d826963fb1a4f5c900e113f610c64728335a0_prof);

    }

    // line 1
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_a7bdc03a5e47c5385985fb64d73c675fc25035c1733a63886dd789f91eee85a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7bdc03a5e47c5385985fb64d73c675fc25035c1733a63886dd789f91eee85a8->enter($__internal_a7bdc03a5e47c5385985fb64d73c675fc25035c1733a63886dd789f91eee85a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_ff64204d20f3589aaf35225286fca88d368bba35cf9c4b2377c305908540e742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff64204d20f3589aaf35225286fca88d368bba35cf9c4b2377c305908540e742->enter($__internal_ff64204d20f3589aaf35225286fca88d368bba35cf9c4b2377c305908540e742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_ff64204d20f3589aaf35225286fca88d368bba35cf9c4b2377c305908540e742->leave($__internal_ff64204d20f3589aaf35225286fca88d368bba35cf9c4b2377c305908540e742_prof);

        
        $__internal_a7bdc03a5e47c5385985fb64d73c675fc25035c1733a63886dd789f91eee85a8->leave($__internal_a7bdc03a5e47c5385985fb64d73c675fc25035c1733a63886dd789f91eee85a8_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_1ef44eb532a12a94c545bf950eb9383fcb5f34f5e59582ec161792356847542b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef44eb532a12a94c545bf950eb9383fcb5f34f5e59582ec161792356847542b->enter($__internal_1ef44eb532a12a94c545bf950eb9383fcb5f34f5e59582ec161792356847542b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_ec1064eb6a0936f5d60b4de219883d59e9a4a562f0a6faad72446d63677a8457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1064eb6a0936f5d60b4de219883d59e9a4a562f0a6faad72446d63677a8457->enter($__internal_ec1064eb6a0936f5d60b4de219883d59e9a4a562f0a6faad72446d63677a8457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_ec1064eb6a0936f5d60b4de219883d59e9a4a562f0a6faad72446d63677a8457->leave($__internal_ec1064eb6a0936f5d60b4de219883d59e9a4a562f0a6faad72446d63677a8457_prof);

        
        $__internal_1ef44eb532a12a94c545bf950eb9383fcb5f34f5e59582ec161792356847542b->leave($__internal_1ef44eb532a12a94c545bf950eb9383fcb5f34f5e59582ec161792356847542b_prof);

    }

    // line 26
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d6e3215c3be95b26d1f95c33b93621e223f79a2977df1ab74f8bbbe80d716d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6e3215c3be95b26d1f95c33b93621e223f79a2977df1ab74f8bbbe80d716d81->enter($__internal_d6e3215c3be95b26d1f95c33b93621e223f79a2977df1ab74f8bbbe80d716d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_22205ef505553ae32c02d3e6a8f9c766971895f66101a9d65ee52378223a372a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22205ef505553ae32c02d3e6a8f9c766971895f66101a9d65ee52378223a372a->enter($__internal_22205ef505553ae32c02d3e6a8f9c766971895f66101a9d65ee52378223a372a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_22205ef505553ae32c02d3e6a8f9c766971895f66101a9d65ee52378223a372a->leave($__internal_22205ef505553ae32c02d3e6a8f9c766971895f66101a9d65ee52378223a372a_prof);

        
        $__internal_d6e3215c3be95b26d1f95c33b93621e223f79a2977df1ab74f8bbbe80d716d81->leave($__internal_d6e3215c3be95b26d1f95c33b93621e223f79a2977df1ab74f8bbbe80d716d81_prof);

    }

    // line 48
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_7b3e40d3e59cce143341d2f36d7534c58dc45545ccb023fd0518f1ebde8364a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b3e40d3e59cce143341d2f36d7534c58dc45545ccb023fd0518f1ebde8364a1->enter($__internal_7b3e40d3e59cce143341d2f36d7534c58dc45545ccb023fd0518f1ebde8364a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_bcc02d9bfb191fb85a27e88ab8558f1d4c566105b9bad0347d2972652ad3dfe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc02d9bfb191fb85a27e88ab8558f1d4c566105b9bad0347d2972652ad3dfe6->enter($__internal_bcc02d9bfb191fb85a27e88ab8558f1d4c566105b9bad0347d2972652ad3dfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 50
        echo "            <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
";
        
        $__internal_bcc02d9bfb191fb85a27e88ab8558f1d4c566105b9bad0347d2972652ad3dfe6->leave($__internal_bcc02d9bfb191fb85a27e88ab8558f1d4c566105b9bad0347d2972652ad3dfe6_prof);

        
        $__internal_7b3e40d3e59cce143341d2f36d7534c58dc45545ccb023fd0518f1ebde8364a1->leave($__internal_7b3e40d3e59cce143341d2f36d7534c58dc45545ccb023fd0518f1ebde8364a1_prof);

    }

    // line 55
    public function block_text_widget($context, array $blocks = array())
    {
        $__internal_853e7be7533286d8d225e5a51cae1b9408ec07466b50313aab92c3345bec71e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853e7be7533286d8d225e5a51cae1b9408ec07466b50313aab92c3345bec71e7->enter($__internal_853e7be7533286d8d225e5a51cae1b9408ec07466b50313aab92c3345bec71e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_d21045c19cb3619631dc77e3de498de395a339da36af3087869fa2907e0ccd4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21045c19cb3619631dc77e3de498de395a339da36af3087869fa2907e0ccd4d->enter($__internal_d21045c19cb3619631dc77e3de498de395a339da36af3087869fa2907e0ccd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        // line 57
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\" />
";
        
        $__internal_d21045c19cb3619631dc77e3de498de395a339da36af3087869fa2907e0ccd4d->leave($__internal_d21045c19cb3619631dc77e3de498de395a339da36af3087869fa2907e0ccd4d_prof);

        
        $__internal_853e7be7533286d8d225e5a51cae1b9408ec07466b50313aab92c3345bec71e7->leave($__internal_853e7be7533286d8d225e5a51cae1b9408ec07466b50313aab92c3345bec71e7_prof);

    }

    // line 60
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_87117d82c722f21a7a9a1187987d1a706c8a53b632a77d6ccf599465c0d70dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87117d82c722f21a7a9a1187987d1a706c8a53b632a77d6ccf599465c0d70dfb->enter($__internal_87117d82c722f21a7a9a1187987d1a706c8a53b632a77d6ccf599465c0d70dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_abf7550a8f9770be8c95e34f624646515cdfc74336a9c908394ab117a8be5328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf7550a8f9770be8c95e34f624646515cdfc74336a9c908394ab117a8be5328->enter($__internal_abf7550a8f9770be8c95e34f624646515cdfc74336a9c908394ab117a8be5328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 62
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\"/>
";
        
        $__internal_abf7550a8f9770be8c95e34f624646515cdfc74336a9c908394ab117a8be5328->leave($__internal_abf7550a8f9770be8c95e34f624646515cdfc74336a9c908394ab117a8be5328_prof);

        
        $__internal_87117d82c722f21a7a9a1187987d1a706c8a53b632a77d6ccf599465c0d70dfb->leave($__internal_87117d82c722f21a7a9a1187987d1a706c8a53b632a77d6ccf599465c0d70dfb_prof);

    }

    // line 66
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6df846a8547d37e2a09d0194e60a72fff6d4e86889356e57c8346215c9a24077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6df846a8547d37e2a09d0194e60a72fff6d4e86889356e57c8346215c9a24077->enter($__internal_6df846a8547d37e2a09d0194e60a72fff6d4e86889356e57c8346215c9a24077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_80bd8dad4dbbbf51ba6ae2456ac1ce197ff5ee094227b808fda43c8209685192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80bd8dad4dbbbf51ba6ae2456ac1ce197ff5ee094227b808fda43c8209685192->enter($__internal_80bd8dad4dbbbf51ba6ae2456ac1ce197ff5ee094227b808fda43c8209685192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_80bd8dad4dbbbf51ba6ae2456ac1ce197ff5ee094227b808fda43c8209685192->leave($__internal_80bd8dad4dbbbf51ba6ae2456ac1ce197ff5ee094227b808fda43c8209685192_prof);

        
        $__internal_6df846a8547d37e2a09d0194e60a72fff6d4e86889356e57c8346215c9a24077->leave($__internal_6df846a8547d37e2a09d0194e60a72fff6d4e86889356e57c8346215c9a24077_prof);

    }

    // line 72
    public function block_field_widget($context, array $blocks = array())
    {
        $__internal_656c17f9e0af5a0196d40480d7e1aeb1fe8a138ad9d9e09939c268a2dc82c9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656c17f9e0af5a0196d40480d7e1aeb1fe8a138ad9d9e09939c268a2dc82c9f7->enter($__internal_656c17f9e0af5a0196d40480d7e1aeb1fe8a138ad9d9e09939c268a2dc82c9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        $__internal_69efe6431cbb4a386fcb2c86fc7fd7ad12d1501fc3fc658ae78e53c753af83e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69efe6431cbb4a386fcb2c86fc7fd7ad12d1501fc3fc658ae78e53c753af83e7->enter($__internal_69efe6431cbb4a386fcb2c86fc7fd7ad12d1501fc3fc658ae78e53c753af83e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

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
        
        $__internal_69efe6431cbb4a386fcb2c86fc7fd7ad12d1501fc3fc658ae78e53c753af83e7->leave($__internal_69efe6431cbb4a386fcb2c86fc7fd7ad12d1501fc3fc658ae78e53c753af83e7_prof);

        
        $__internal_656c17f9e0af5a0196d40480d7e1aeb1fe8a138ad9d9e09939c268a2dc82c9f7->leave($__internal_656c17f9e0af5a0196d40480d7e1aeb1fe8a138ad9d9e09939c268a2dc82c9f7_prof);

    }

    // line 78
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_dbfc4fb51103aba461774c2aa852b5c9d4178e144ab191f156220986af193b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbfc4fb51103aba461774c2aa852b5c9d4178e144ab191f156220986af193b2f->enter($__internal_dbfc4fb51103aba461774c2aa852b5c9d4178e144ab191f156220986af193b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_7ce2d51ea796c397a66ff8e596b293fc346d272ee41c142a9c85f14fae7a257d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce2d51ea796c397a66ff8e596b293fc346d272ee41c142a9c85f14fae7a257d->enter($__internal_7ce2d51ea796c397a66ff8e596b293fc346d272ee41c142a9c85f14fae7a257d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

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
        
        $__internal_7ce2d51ea796c397a66ff8e596b293fc346d272ee41c142a9c85f14fae7a257d->leave($__internal_7ce2d51ea796c397a66ff8e596b293fc346d272ee41c142a9c85f14fae7a257d_prof);

        
        $__internal_dbfc4fb51103aba461774c2aa852b5c9d4178e144ab191f156220986af193b2f->leave($__internal_dbfc4fb51103aba461774c2aa852b5c9d4178e144ab191f156220986af193b2f_prof);

    }

    // line 86
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e4583f1dfa6c7d8e927fbf5cf065add8883820be82d80e001c4a6a1f1dd4b1ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4583f1dfa6c7d8e927fbf5cf065add8883820be82d80e001c4a6a1f1dd4b1ea->enter($__internal_e4583f1dfa6c7d8e927fbf5cf065add8883820be82d80e001c4a6a1f1dd4b1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_3c23533978b1ab55a83f7fc56d6cb367b20657463866b05f6f33437856798f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c23533978b1ab55a83f7fc56d6cb367b20657463866b05f6f33437856798f6f->enter($__internal_3c23533978b1ab55a83f7fc56d6cb367b20657463866b05f6f33437856798f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_3c23533978b1ab55a83f7fc56d6cb367b20657463866b05f6f33437856798f6f->leave($__internal_3c23533978b1ab55a83f7fc56d6cb367b20657463866b05f6f33437856798f6f_prof);

        
        $__internal_e4583f1dfa6c7d8e927fbf5cf065add8883820be82d80e001c4a6a1f1dd4b1ea->leave($__internal_e4583f1dfa6c7d8e927fbf5cf065add8883820be82d80e001c4a6a1f1dd4b1ea_prof);

    }

    // line 108
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_43bd5996c300f04faabc8c8f3457197d38d317b0a545db650358caebd06d97d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43bd5996c300f04faabc8c8f3457197d38d317b0a545db650358caebd06d97d5->enter($__internal_43bd5996c300f04faabc8c8f3457197d38d317b0a545db650358caebd06d97d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_5adf64f38342296d03de870775636eba2f3c8602e5d5a2f98082b6eeb35bfea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5adf64f38342296d03de870775636eba2f3c8602e5d5a2f98082b6eeb35bfea8->enter($__internal_5adf64f38342296d03de870775636eba2f3c8602e5d5a2f98082b6eeb35bfea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 110
        echo "        <textarea oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        
        $__internal_5adf64f38342296d03de870775636eba2f3c8602e5d5a2f98082b6eeb35bfea8->leave($__internal_5adf64f38342296d03de870775636eba2f3c8602e5d5a2f98082b6eeb35bfea8_prof);

        
        $__internal_43bd5996c300f04faabc8c8f3457197d38d317b0a545db650358caebd06d97d5->leave($__internal_43bd5996c300f04faabc8c8f3457197d38d317b0a545db650358caebd06d97d5_prof);

    }

    // line 115
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b7c0343d8f4f9378800ef1182914057e965d5e38cb1bdf8c02f933c63616dec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c0343d8f4f9378800ef1182914057e965d5e38cb1bdf8c02f933c63616dec2->enter($__internal_b7c0343d8f4f9378800ef1182914057e965d5e38cb1bdf8c02f933c63616dec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f2bacfc27435b74af1b807fa371054e84547e88f64cbb911284737ae408fc83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bacfc27435b74af1b807fa371054e84547e88f64cbb911284737ae408fc83c->enter($__internal_f2bacfc27435b74af1b807fa371054e84547e88f64cbb911284737ae408fc83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_f2bacfc27435b74af1b807fa371054e84547e88f64cbb911284737ae408fc83c->leave($__internal_f2bacfc27435b74af1b807fa371054e84547e88f64cbb911284737ae408fc83c_prof);

        
        $__internal_b7c0343d8f4f9378800ef1182914057e965d5e38cb1bdf8c02f933c63616dec2->leave($__internal_b7c0343d8f4f9378800ef1182914057e965d5e38cb1bdf8c02f933c63616dec2_prof);

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
