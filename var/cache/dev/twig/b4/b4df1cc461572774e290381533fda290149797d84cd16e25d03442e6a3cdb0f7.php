<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_2600f674e13a27a6979bd7df738da1ead82844a48af293bde02575527a349d48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bed8ee03b6215942713d22a67d295c7033f1b57d5342a9d0ef359beee8c87cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed8ee03b6215942713d22a67d295c7033f1b57d5342a9d0ef359beee8c87cef->enter($__internal_bed8ee03b6215942713d22a67d295c7033f1b57d5342a9d0ef359beee8c87cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_859ba9f8947c320e5916434f3b2af1369110e6c9274679c17158064a79347448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859ba9f8947c320e5916434f3b2af1369110e6c9274679c17158064a79347448->enter($__internal_859ba9f8947c320e5916434f3b2af1369110e6c9274679c17158064a79347448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_bed8ee03b6215942713d22a67d295c7033f1b57d5342a9d0ef359beee8c87cef->leave($__internal_bed8ee03b6215942713d22a67d295c7033f1b57d5342a9d0ef359beee8c87cef_prof);

        
        $__internal_859ba9f8947c320e5916434f3b2af1369110e6c9274679c17158064a79347448->leave($__internal_859ba9f8947c320e5916434f3b2af1369110e6c9274679c17158064a79347448_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_5ecabec05e6b8d0e789f8a824d8ed615fa2a662efcbfd9dbf9bdd1a70f7cf8ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ecabec05e6b8d0e789f8a824d8ed615fa2a662efcbfd9dbf9bdd1a70f7cf8ba->enter($__internal_5ecabec05e6b8d0e789f8a824d8ed615fa2a662efcbfd9dbf9bdd1a70f7cf8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_9b1572039f6db89127dcda38c54570d8eb1d97d97bd22fdd1dea3d905a8ad0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1572039f6db89127dcda38c54570d8eb1d97d97bd22fdd1dea3d905a8ad0d5->enter($__internal_9b1572039f6db89127dcda38c54570d8eb1d97d97bd22fdd1dea3d905a8ad0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9b1572039f6db89127dcda38c54570d8eb1d97d97bd22fdd1dea3d905a8ad0d5->leave($__internal_9b1572039f6db89127dcda38c54570d8eb1d97d97bd22fdd1dea3d905a8ad0d5_prof);

        
        $__internal_5ecabec05e6b8d0e789f8a824d8ed615fa2a662efcbfd9dbf9bdd1a70f7cf8ba->leave($__internal_5ecabec05e6b8d0e789f8a824d8ed615fa2a662efcbfd9dbf9bdd1a70f7cf8ba_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_83fa876714c9cf41bff7c28d4e73fffc7b88da532fda740dbd2d428b59def35b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83fa876714c9cf41bff7c28d4e73fffc7b88da532fda740dbd2d428b59def35b->enter($__internal_83fa876714c9cf41bff7c28d4e73fffc7b88da532fda740dbd2d428b59def35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_7c0eb3e5f8fa54c2cccc5003730e4853514b3e12fa18f91ec91fb07c51bff442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0eb3e5f8fa54c2cccc5003730e4853514b3e12fa18f91ec91fb07c51bff442->enter($__internal_7c0eb3e5f8fa54c2cccc5003730e4853514b3e12fa18f91ec91fb07c51bff442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_7c0eb3e5f8fa54c2cccc5003730e4853514b3e12fa18f91ec91fb07c51bff442->leave($__internal_7c0eb3e5f8fa54c2cccc5003730e4853514b3e12fa18f91ec91fb07c51bff442_prof);

        
        $__internal_83fa876714c9cf41bff7c28d4e73fffc7b88da532fda740dbd2d428b59def35b->leave($__internal_83fa876714c9cf41bff7c28d4e73fffc7b88da532fda740dbd2d428b59def35b_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ba1c050b9282378cafa5e19eb171a5e04135ad38643d9be25b39871acbd4d3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1c050b9282378cafa5e19eb171a5e04135ad38643d9be25b39871acbd4d3d6->enter($__internal_ba1c050b9282378cafa5e19eb171a5e04135ad38643d9be25b39871acbd4d3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_cbec73d47aca4968f57c344450ce61b25395c3666efeee3649832330f91c0721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbec73d47aca4968f57c344450ce61b25395c3666efeee3649832330f91c0721->enter($__internal_cbec73d47aca4968f57c344450ce61b25395c3666efeee3649832330f91c0721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_cbec73d47aca4968f57c344450ce61b25395c3666efeee3649832330f91c0721->leave($__internal_cbec73d47aca4968f57c344450ce61b25395c3666efeee3649832330f91c0721_prof);

        
        $__internal_ba1c050b9282378cafa5e19eb171a5e04135ad38643d9be25b39871acbd4d3d6->leave($__internal_ba1c050b9282378cafa5e19eb171a5e04135ad38643d9be25b39871acbd4d3d6_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ada71d09bde9597e84bc4c63b429d336d905924ecd269d8ddc5bd9f1191f0a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada71d09bde9597e84bc4c63b429d336d905924ecd269d8ddc5bd9f1191f0a1a->enter($__internal_ada71d09bde9597e84bc4c63b429d336d905924ecd269d8ddc5bd9f1191f0a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_c787491c7d96e1a26c228668163af632390599e5dc8691096ae6d833ace7fc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c787491c7d96e1a26c228668163af632390599e5dc8691096ae6d833ace7fc13->enter($__internal_c787491c7d96e1a26c228668163af632390599e5dc8691096ae6d833ace7fc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_a1bdfe9fca453c19455d2a57b648842a617799dbe3854ffc587cce644459e964 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_41ff8b5898f1963b6d108d9336e3a2921ff6b309fa6ec5728a9046053be1cd5a = "{{") && ('' === $__internal_41ff8b5898f1963b6d108d9336e3a2921ff6b309fa6ec5728a9046053be1cd5a || 0 === strpos($__internal_a1bdfe9fca453c19455d2a57b648842a617799dbe3854ffc587cce644459e964, $__internal_41ff8b5898f1963b6d108d9336e3a2921ff6b309fa6ec5728a9046053be1cd5a)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_c787491c7d96e1a26c228668163af632390599e5dc8691096ae6d833ace7fc13->leave($__internal_c787491c7d96e1a26c228668163af632390599e5dc8691096ae6d833ace7fc13_prof);

        
        $__internal_ada71d09bde9597e84bc4c63b429d336d905924ecd269d8ddc5bd9f1191f0a1a->leave($__internal_ada71d09bde9597e84bc4c63b429d336d905924ecd269d8ddc5bd9f1191f0a1a_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_88596e75f46477195a26a89191144705f0c004706f34ec2d3c5bfb9cd57f51f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88596e75f46477195a26a89191144705f0c004706f34ec2d3c5bfb9cd57f51f4->enter($__internal_88596e75f46477195a26a89191144705f0c004706f34ec2d3c5bfb9cd57f51f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_5d92153c68fe1fbfca048331cbdf0c179ad6bcbb0eafe53c02545e38f0827a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d92153c68fe1fbfca048331cbdf0c179ad6bcbb0eafe53c02545e38f0827a2f->enter($__internal_5d92153c68fe1fbfca048331cbdf0c179ad6bcbb0eafe53c02545e38f0827a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_5d92153c68fe1fbfca048331cbdf0c179ad6bcbb0eafe53c02545e38f0827a2f->leave($__internal_5d92153c68fe1fbfca048331cbdf0c179ad6bcbb0eafe53c02545e38f0827a2f_prof);

        
        $__internal_88596e75f46477195a26a89191144705f0c004706f34ec2d3c5bfb9cd57f51f4->leave($__internal_88596e75f46477195a26a89191144705f0c004706f34ec2d3c5bfb9cd57f51f4_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_56911c18264f9559ea7381f424b198c5d7b2b27c116d82623b705b54420dd7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56911c18264f9559ea7381f424b198c5d7b2b27c116d82623b705b54420dd7b2->enter($__internal_56911c18264f9559ea7381f424b198c5d7b2b27c116d82623b705b54420dd7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a3b580964e89d1dbd56908a22fc52ec95413c1863f72892974486aa5f918853f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b580964e89d1dbd56908a22fc52ec95413c1863f72892974486aa5f918853f->enter($__internal_a3b580964e89d1dbd56908a22fc52ec95413c1863f72892974486aa5f918853f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_a3b580964e89d1dbd56908a22fc52ec95413c1863f72892974486aa5f918853f->leave($__internal_a3b580964e89d1dbd56908a22fc52ec95413c1863f72892974486aa5f918853f_prof);

        
        $__internal_56911c18264f9559ea7381f424b198c5d7b2b27c116d82623b705b54420dd7b2->leave($__internal_56911c18264f9559ea7381f424b198c5d7b2b27c116d82623b705b54420dd7b2_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_0349bbdb8f6f431268f307ae8bdc3c2ac1bb13557a8ac68e209f9dcaff340105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0349bbdb8f6f431268f307ae8bdc3c2ac1bb13557a8ac68e209f9dcaff340105->enter($__internal_0349bbdb8f6f431268f307ae8bdc3c2ac1bb13557a8ac68e209f9dcaff340105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_7580e0a53ecb3bf134b6d4200808f8c2800672aee69dc8a64570ae9f21a40252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7580e0a53ecb3bf134b6d4200808f8c2800672aee69dc8a64570ae9f21a40252->enter($__internal_7580e0a53ecb3bf134b6d4200808f8c2800672aee69dc8a64570ae9f21a40252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_7580e0a53ecb3bf134b6d4200808f8c2800672aee69dc8a64570ae9f21a40252->leave($__internal_7580e0a53ecb3bf134b6d4200808f8c2800672aee69dc8a64570ae9f21a40252_prof);

        
        $__internal_0349bbdb8f6f431268f307ae8bdc3c2ac1bb13557a8ac68e209f9dcaff340105->leave($__internal_0349bbdb8f6f431268f307ae8bdc3c2ac1bb13557a8ac68e209f9dcaff340105_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_fa252a822dbc46e644f479eb364cb6f385d6a7961ee24eebff57c4008c3244ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa252a822dbc46e644f479eb364cb6f385d6a7961ee24eebff57c4008c3244ba->enter($__internal_fa252a822dbc46e644f479eb364cb6f385d6a7961ee24eebff57c4008c3244ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_33c5d05204f14c49fa6f29b8f86f5bf736eb79c2830cdec7350249949d42ee81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c5d05204f14c49fa6f29b8f86f5bf736eb79c2830cdec7350249949d42ee81->enter($__internal_33c5d05204f14c49fa6f29b8f86f5bf736eb79c2830cdec7350249949d42ee81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_33c5d05204f14c49fa6f29b8f86f5bf736eb79c2830cdec7350249949d42ee81->leave($__internal_33c5d05204f14c49fa6f29b8f86f5bf736eb79c2830cdec7350249949d42ee81_prof);

        
        $__internal_fa252a822dbc46e644f479eb364cb6f385d6a7961ee24eebff57c4008c3244ba->leave($__internal_fa252a822dbc46e644f479eb364cb6f385d6a7961ee24eebff57c4008c3244ba_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_bc4ad1a1b9a7aeca16392ea4936e3ab1f6e9179b6509c823174e5ff91495ad69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4ad1a1b9a7aeca16392ea4936e3ab1f6e9179b6509c823174e5ff91495ad69->enter($__internal_bc4ad1a1b9a7aeca16392ea4936e3ab1f6e9179b6509c823174e5ff91495ad69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_72900f8a2de4f46476d644ef4ba391993e4f768edb3f7997ca657fd0875f750d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72900f8a2de4f46476d644ef4ba391993e4f768edb3f7997ca657fd0875f750d->enter($__internal_72900f8a2de4f46476d644ef4ba391993e4f768edb3f7997ca657fd0875f750d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_72900f8a2de4f46476d644ef4ba391993e4f768edb3f7997ca657fd0875f750d->leave($__internal_72900f8a2de4f46476d644ef4ba391993e4f768edb3f7997ca657fd0875f750d_prof);

        
        $__internal_bc4ad1a1b9a7aeca16392ea4936e3ab1f6e9179b6509c823174e5ff91495ad69->leave($__internal_bc4ad1a1b9a7aeca16392ea4936e3ab1f6e9179b6509c823174e5ff91495ad69_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3f504f74483235677227878b4647589de9f17a21fc5a804b4f11a22ab6924c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f504f74483235677227878b4647589de9f17a21fc5a804b4f11a22ab6924c5d->enter($__internal_3f504f74483235677227878b4647589de9f17a21fc5a804b4f11a22ab6924c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_c25d0b9b8d9dabc27c29d0a2ce69f82881ec276c02c75e207ffa43fe3b1fe7a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25d0b9b8d9dabc27c29d0a2ce69f82881ec276c02c75e207ffa43fe3b1fe7a1->enter($__internal_c25d0b9b8d9dabc27c29d0a2ce69f82881ec276c02c75e207ffa43fe3b1fe7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_c25d0b9b8d9dabc27c29d0a2ce69f82881ec276c02c75e207ffa43fe3b1fe7a1->leave($__internal_c25d0b9b8d9dabc27c29d0a2ce69f82881ec276c02c75e207ffa43fe3b1fe7a1_prof);

        
        $__internal_3f504f74483235677227878b4647589de9f17a21fc5a804b4f11a22ab6924c5d->leave($__internal_3f504f74483235677227878b4647589de9f17a21fc5a804b4f11a22ab6924c5d_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_179dd970cbfe98a986e1885bddd1424983b415baad79f30f75e1422934528fd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179dd970cbfe98a986e1885bddd1424983b415baad79f30f75e1422934528fd9->enter($__internal_179dd970cbfe98a986e1885bddd1424983b415baad79f30f75e1422934528fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_0154c64dfee94d8db8ce776040acdd349c49e9f473fa8b03e38af8f6005d22f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0154c64dfee94d8db8ce776040acdd349c49e9f473fa8b03e38af8f6005d22f9->enter($__internal_0154c64dfee94d8db8ce776040acdd349c49e9f473fa8b03e38af8f6005d22f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_0154c64dfee94d8db8ce776040acdd349c49e9f473fa8b03e38af8f6005d22f9->leave($__internal_0154c64dfee94d8db8ce776040acdd349c49e9f473fa8b03e38af8f6005d22f9_prof);

        
        $__internal_179dd970cbfe98a986e1885bddd1424983b415baad79f30f75e1422934528fd9->leave($__internal_179dd970cbfe98a986e1885bddd1424983b415baad79f30f75e1422934528fd9_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_01529ef481c2e5adbeeea349c5863caf3612a4dd30f9730ecb623c7ecc62a878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01529ef481c2e5adbeeea349c5863caf3612a4dd30f9730ecb623c7ecc62a878->enter($__internal_01529ef481c2e5adbeeea349c5863caf3612a4dd30f9730ecb623c7ecc62a878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_1ff60bdd1496104d4a1626e0ef2eb23b8a1b64b151aeabc192eb426d868e8a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff60bdd1496104d4a1626e0ef2eb23b8a1b64b151aeabc192eb426d868e8a79->enter($__internal_1ff60bdd1496104d4a1626e0ef2eb23b8a1b64b151aeabc192eb426d868e8a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_1ff60bdd1496104d4a1626e0ef2eb23b8a1b64b151aeabc192eb426d868e8a79->leave($__internal_1ff60bdd1496104d4a1626e0ef2eb23b8a1b64b151aeabc192eb426d868e8a79_prof);

        
        $__internal_01529ef481c2e5adbeeea349c5863caf3612a4dd30f9730ecb623c7ecc62a878->leave($__internal_01529ef481c2e5adbeeea349c5863caf3612a4dd30f9730ecb623c7ecc62a878_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_80f6bb44150fb10d8336b9102abfc78afbd028205798f7c1e53fb1af9ebb2887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f6bb44150fb10d8336b9102abfc78afbd028205798f7c1e53fb1af9ebb2887->enter($__internal_80f6bb44150fb10d8336b9102abfc78afbd028205798f7c1e53fb1af9ebb2887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_706f88b902f98c31bc64f48e04ce3fab4abf6e1e3129dddf4dd2d4f511be4ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706f88b902f98c31bc64f48e04ce3fab4abf6e1e3129dddf4dd2d4f511be4ee5->enter($__internal_706f88b902f98c31bc64f48e04ce3fab4abf6e1e3129dddf4dd2d4f511be4ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_706f88b902f98c31bc64f48e04ce3fab4abf6e1e3129dddf4dd2d4f511be4ee5->leave($__internal_706f88b902f98c31bc64f48e04ce3fab4abf6e1e3129dddf4dd2d4f511be4ee5_prof);

        
        $__internal_80f6bb44150fb10d8336b9102abfc78afbd028205798f7c1e53fb1af9ebb2887->leave($__internal_80f6bb44150fb10d8336b9102abfc78afbd028205798f7c1e53fb1af9ebb2887_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d89e8af5ca4b3962d14c9e04d8299485efaa750fac7c9ae951eccdbd8b1d9d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89e8af5ca4b3962d14c9e04d8299485efaa750fac7c9ae951eccdbd8b1d9d8c->enter($__internal_d89e8af5ca4b3962d14c9e04d8299485efaa750fac7c9ae951eccdbd8b1d9d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a9110b8612c49bd2d96fb5d767a2da283e8670abe678bc592688e4f899457993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9110b8612c49bd2d96fb5d767a2da283e8670abe678bc592688e4f899457993->enter($__internal_a9110b8612c49bd2d96fb5d767a2da283e8670abe678bc592688e4f899457993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a9110b8612c49bd2d96fb5d767a2da283e8670abe678bc592688e4f899457993->leave($__internal_a9110b8612c49bd2d96fb5d767a2da283e8670abe678bc592688e4f899457993_prof);

        
        $__internal_d89e8af5ca4b3962d14c9e04d8299485efaa750fac7c9ae951eccdbd8b1d9d8c->leave($__internal_d89e8af5ca4b3962d14c9e04d8299485efaa750fac7c9ae951eccdbd8b1d9d8c_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7158ce6a0db8d683efafe027da23d5f72f33a842f353cadcfed471ac6b6b055d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7158ce6a0db8d683efafe027da23d5f72f33a842f353cadcfed471ac6b6b055d->enter($__internal_7158ce6a0db8d683efafe027da23d5f72f33a842f353cadcfed471ac6b6b055d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_80424ae76a0975beecc25e80c9f194b5b58b4f1001c22a27b7cf89a87c703380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80424ae76a0975beecc25e80c9f194b5b58b4f1001c22a27b7cf89a87c703380->enter($__internal_80424ae76a0975beecc25e80c9f194b5b58b4f1001c22a27b7cf89a87c703380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_80424ae76a0975beecc25e80c9f194b5b58b4f1001c22a27b7cf89a87c703380->leave($__internal_80424ae76a0975beecc25e80c9f194b5b58b4f1001c22a27b7cf89a87c703380_prof);

        
        $__internal_7158ce6a0db8d683efafe027da23d5f72f33a842f353cadcfed471ac6b6b055d->leave($__internal_7158ce6a0db8d683efafe027da23d5f72f33a842f353cadcfed471ac6b6b055d_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_4c2770d64097a2269f722f71b23f79db29b09126a180ceb15c5535ab377bc893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2770d64097a2269f722f71b23f79db29b09126a180ceb15c5535ab377bc893->enter($__internal_4c2770d64097a2269f722f71b23f79db29b09126a180ceb15c5535ab377bc893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_34f370f4abd6e7827250a239044c0e60645ebe06eb1275721dd7ea358d48905e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f370f4abd6e7827250a239044c0e60645ebe06eb1275721dd7ea358d48905e->enter($__internal_34f370f4abd6e7827250a239044c0e60645ebe06eb1275721dd7ea358d48905e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_34f370f4abd6e7827250a239044c0e60645ebe06eb1275721dd7ea358d48905e->leave($__internal_34f370f4abd6e7827250a239044c0e60645ebe06eb1275721dd7ea358d48905e_prof);

        
        $__internal_4c2770d64097a2269f722f71b23f79db29b09126a180ceb15c5535ab377bc893->leave($__internal_4c2770d64097a2269f722f71b23f79db29b09126a180ceb15c5535ab377bc893_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_48b52d63d68260340331e1fc01f28d0d8217101bdc01bd7caf21d99ee48267ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b52d63d68260340331e1fc01f28d0d8217101bdc01bd7caf21d99ee48267ef->enter($__internal_48b52d63d68260340331e1fc01f28d0d8217101bdc01bd7caf21d99ee48267ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_099ca85f70fc6cd62c3a0118b5e6f2872c7f1e4b84a95947de1a3e07b7847ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099ca85f70fc6cd62c3a0118b5e6f2872c7f1e4b84a95947de1a3e07b7847ca2->enter($__internal_099ca85f70fc6cd62c3a0118b5e6f2872c7f1e4b84a95947de1a3e07b7847ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_099ca85f70fc6cd62c3a0118b5e6f2872c7f1e4b84a95947de1a3e07b7847ca2->leave($__internal_099ca85f70fc6cd62c3a0118b5e6f2872c7f1e4b84a95947de1a3e07b7847ca2_prof);

        
        $__internal_48b52d63d68260340331e1fc01f28d0d8217101bdc01bd7caf21d99ee48267ef->leave($__internal_48b52d63d68260340331e1fc01f28d0d8217101bdc01bd7caf21d99ee48267ef_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_cb20666fffe9b47f16e4496509c485e54acfa73cf027ee8208e0c95916a87d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb20666fffe9b47f16e4496509c485e54acfa73cf027ee8208e0c95916a87d50->enter($__internal_cb20666fffe9b47f16e4496509c485e54acfa73cf027ee8208e0c95916a87d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_03f7003e520fcfbde21e6b6043c595b0954d6d1e1e294ac477d73926b65887e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f7003e520fcfbde21e6b6043c595b0954d6d1e1e294ac477d73926b65887e1->enter($__internal_03f7003e520fcfbde21e6b6043c595b0954d6d1e1e294ac477d73926b65887e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_03f7003e520fcfbde21e6b6043c595b0954d6d1e1e294ac477d73926b65887e1->leave($__internal_03f7003e520fcfbde21e6b6043c595b0954d6d1e1e294ac477d73926b65887e1_prof);

        
        $__internal_cb20666fffe9b47f16e4496509c485e54acfa73cf027ee8208e0c95916a87d50->leave($__internal_cb20666fffe9b47f16e4496509c485e54acfa73cf027ee8208e0c95916a87d50_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_40512a6f9d9ce76e890ba1694bc6616a2b1c68461c2f0872a81bbb82afc02f4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40512a6f9d9ce76e890ba1694bc6616a2b1c68461c2f0872a81bbb82afc02f4f->enter($__internal_40512a6f9d9ce76e890ba1694bc6616a2b1c68461c2f0872a81bbb82afc02f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b86fb36f57ad855d54e6841837f8219031d2c7f243c9481d3ee904a6fc83e0cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86fb36f57ad855d54e6841837f8219031d2c7f243c9481d3ee904a6fc83e0cc->enter($__internal_b86fb36f57ad855d54e6841837f8219031d2c7f243c9481d3ee904a6fc83e0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_b86fb36f57ad855d54e6841837f8219031d2c7f243c9481d3ee904a6fc83e0cc->leave($__internal_b86fb36f57ad855d54e6841837f8219031d2c7f243c9481d3ee904a6fc83e0cc_prof);

        
        $__internal_40512a6f9d9ce76e890ba1694bc6616a2b1c68461c2f0872a81bbb82afc02f4f->leave($__internal_40512a6f9d9ce76e890ba1694bc6616a2b1c68461c2f0872a81bbb82afc02f4f_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_636cac8fb6636e37b66ae99903e8112b8bcd326140b967edf857e07b9c0df821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636cac8fb6636e37b66ae99903e8112b8bcd326140b967edf857e07b9c0df821->enter($__internal_636cac8fb6636e37b66ae99903e8112b8bcd326140b967edf857e07b9c0df821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_54a2810ee83c192332423074b07f2fc3fc8c70cb095dbf580cee9556b6ce8523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a2810ee83c192332423074b07f2fc3fc8c70cb095dbf580cee9556b6ce8523->enter($__internal_54a2810ee83c192332423074b07f2fc3fc8c70cb095dbf580cee9556b6ce8523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_54a2810ee83c192332423074b07f2fc3fc8c70cb095dbf580cee9556b6ce8523->leave($__internal_54a2810ee83c192332423074b07f2fc3fc8c70cb095dbf580cee9556b6ce8523_prof);

        
        $__internal_636cac8fb6636e37b66ae99903e8112b8bcd326140b967edf857e07b9c0df821->leave($__internal_636cac8fb6636e37b66ae99903e8112b8bcd326140b967edf857e07b9c0df821_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_dd4f0bd21e14f4ca94beb2dd429b3884b126cd640b5f413825d5a1a35e0eb0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4f0bd21e14f4ca94beb2dd429b3884b126cd640b5f413825d5a1a35e0eb0c1->enter($__internal_dd4f0bd21e14f4ca94beb2dd429b3884b126cd640b5f413825d5a1a35e0eb0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_04ea1b311c48155817a771e3035836c120623c44d9a0fb4ed8dd0e90d0b9b214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ea1b311c48155817a771e3035836c120623c44d9a0fb4ed8dd0e90d0b9b214->enter($__internal_04ea1b311c48155817a771e3035836c120623c44d9a0fb4ed8dd0e90d0b9b214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_04ea1b311c48155817a771e3035836c120623c44d9a0fb4ed8dd0e90d0b9b214->leave($__internal_04ea1b311c48155817a771e3035836c120623c44d9a0fb4ed8dd0e90d0b9b214_prof);

        
        $__internal_dd4f0bd21e14f4ca94beb2dd429b3884b126cd640b5f413825d5a1a35e0eb0c1->leave($__internal_dd4f0bd21e14f4ca94beb2dd429b3884b126cd640b5f413825d5a1a35e0eb0c1_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_806099a2eb8ba79a0c781975be32e009d380686b532f723ac58fec5b78f24a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_806099a2eb8ba79a0c781975be32e009d380686b532f723ac58fec5b78f24a7a->enter($__internal_806099a2eb8ba79a0c781975be32e009d380686b532f723ac58fec5b78f24a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_013b25300c040ab9036e815b4fdfcea17e69afcc9d1d616cbe1d7e19acfe9c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013b25300c040ab9036e815b4fdfcea17e69afcc9d1d616cbe1d7e19acfe9c97->enter($__internal_013b25300c040ab9036e815b4fdfcea17e69afcc9d1d616cbe1d7e19acfe9c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_013b25300c040ab9036e815b4fdfcea17e69afcc9d1d616cbe1d7e19acfe9c97->leave($__internal_013b25300c040ab9036e815b4fdfcea17e69afcc9d1d616cbe1d7e19acfe9c97_prof);

        
        $__internal_806099a2eb8ba79a0c781975be32e009d380686b532f723ac58fec5b78f24a7a->leave($__internal_806099a2eb8ba79a0c781975be32e009d380686b532f723ac58fec5b78f24a7a_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_d35db78bdcc906364d7870e1ae08042d5c88c127936d0b7e1943e4dfe6a5a332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35db78bdcc906364d7870e1ae08042d5c88c127936d0b7e1943e4dfe6a5a332->enter($__internal_d35db78bdcc906364d7870e1ae08042d5c88c127936d0b7e1943e4dfe6a5a332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_84a59d2149b134bbcba38c8ce9022a8487c371e591af1eeef4e69cdb1929de3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a59d2149b134bbcba38c8ce9022a8487c371e591af1eeef4e69cdb1929de3f->enter($__internal_84a59d2149b134bbcba38c8ce9022a8487c371e591af1eeef4e69cdb1929de3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_84a59d2149b134bbcba38c8ce9022a8487c371e591af1eeef4e69cdb1929de3f->leave($__internal_84a59d2149b134bbcba38c8ce9022a8487c371e591af1eeef4e69cdb1929de3f_prof);

        
        $__internal_d35db78bdcc906364d7870e1ae08042d5c88c127936d0b7e1943e4dfe6a5a332->leave($__internal_d35db78bdcc906364d7870e1ae08042d5c88c127936d0b7e1943e4dfe6a5a332_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_e6e58dd93ce3b2b4361a2ef1ee5091a466e8f1c70ed75a80e5621a100d5972fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e58dd93ce3b2b4361a2ef1ee5091a466e8f1c70ed75a80e5621a100d5972fc->enter($__internal_e6e58dd93ce3b2b4361a2ef1ee5091a466e8f1c70ed75a80e5621a100d5972fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_f7878f34b4fe9b9deef3851024657761a2e0b6f0a87d89a2e8be5c0567c0e0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7878f34b4fe9b9deef3851024657761a2e0b6f0a87d89a2e8be5c0567c0e0ee->enter($__internal_f7878f34b4fe9b9deef3851024657761a2e0b6f0a87d89a2e8be5c0567c0e0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f7878f34b4fe9b9deef3851024657761a2e0b6f0a87d89a2e8be5c0567c0e0ee->leave($__internal_f7878f34b4fe9b9deef3851024657761a2e0b6f0a87d89a2e8be5c0567c0e0ee_prof);

        
        $__internal_e6e58dd93ce3b2b4361a2ef1ee5091a466e8f1c70ed75a80e5621a100d5972fc->leave($__internal_e6e58dd93ce3b2b4361a2ef1ee5091a466e8f1c70ed75a80e5621a100d5972fc_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5f6e224047d9db081fb904c83e0c3907a5f8b510c9ac65fd5ad491f58056ff77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f6e224047d9db081fb904c83e0c3907a5f8b510c9ac65fd5ad491f58056ff77->enter($__internal_5f6e224047d9db081fb904c83e0c3907a5f8b510c9ac65fd5ad491f58056ff77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f9b31c9c7a8ebdf1a1814bcf226897ea5b339e988e2155f3a1e32e1c25f3b8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b31c9c7a8ebdf1a1814bcf226897ea5b339e988e2155f3a1e32e1c25f3b8fd->enter($__internal_f9b31c9c7a8ebdf1a1814bcf226897ea5b339e988e2155f3a1e32e1c25f3b8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_f9b31c9c7a8ebdf1a1814bcf226897ea5b339e988e2155f3a1e32e1c25f3b8fd->leave($__internal_f9b31c9c7a8ebdf1a1814bcf226897ea5b339e988e2155f3a1e32e1c25f3b8fd_prof);

        
        $__internal_5f6e224047d9db081fb904c83e0c3907a5f8b510c9ac65fd5ad491f58056ff77->leave($__internal_5f6e224047d9db081fb904c83e0c3907a5f8b510c9ac65fd5ad491f58056ff77_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_d767a6109c9c4fd16a0da4e43e9d9247d7cf4981f6e8f0d0261dcf971b518d6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d767a6109c9c4fd16a0da4e43e9d9247d7cf4981f6e8f0d0261dcf971b518d6c->enter($__internal_d767a6109c9c4fd16a0da4e43e9d9247d7cf4981f6e8f0d0261dcf971b518d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e013b8f60a4da78c5e35067a01945240a4f683b001b26aed4a60e88a64b98d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e013b8f60a4da78c5e35067a01945240a4f683b001b26aed4a60e88a64b98d84->enter($__internal_e013b8f60a4da78c5e35067a01945240a4f683b001b26aed4a60e88a64b98d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_e013b8f60a4da78c5e35067a01945240a4f683b001b26aed4a60e88a64b98d84->leave($__internal_e013b8f60a4da78c5e35067a01945240a4f683b001b26aed4a60e88a64b98d84_prof);

        
        $__internal_d767a6109c9c4fd16a0da4e43e9d9247d7cf4981f6e8f0d0261dcf971b518d6c->leave($__internal_d767a6109c9c4fd16a0da4e43e9d9247d7cf4981f6e8f0d0261dcf971b518d6c_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_9cbd5f7565ab179d7dc201bf92320cda9ea1a5a6ee1f985e7184e98147a7d644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cbd5f7565ab179d7dc201bf92320cda9ea1a5a6ee1f985e7184e98147a7d644->enter($__internal_9cbd5f7565ab179d7dc201bf92320cda9ea1a5a6ee1f985e7184e98147a7d644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c0318e17a021ba7632a53d3532df9274c3ded78ef3d5b2810c90591a13fbfe9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0318e17a021ba7632a53d3532df9274c3ded78ef3d5b2810c90591a13fbfe9a->enter($__internal_c0318e17a021ba7632a53d3532df9274c3ded78ef3d5b2810c90591a13fbfe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_c0318e17a021ba7632a53d3532df9274c3ded78ef3d5b2810c90591a13fbfe9a->leave($__internal_c0318e17a021ba7632a53d3532df9274c3ded78ef3d5b2810c90591a13fbfe9a_prof);

        
        $__internal_9cbd5f7565ab179d7dc201bf92320cda9ea1a5a6ee1f985e7184e98147a7d644->leave($__internal_9cbd5f7565ab179d7dc201bf92320cda9ea1a5a6ee1f985e7184e98147a7d644_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
