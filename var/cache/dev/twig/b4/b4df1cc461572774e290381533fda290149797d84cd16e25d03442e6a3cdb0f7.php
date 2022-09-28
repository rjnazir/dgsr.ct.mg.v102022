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
        $__internal_fc1e0d943574b087c5d97cadf56b32351626137fb7f79a21ea9ddafd541f5621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1e0d943574b087c5d97cadf56b32351626137fb7f79a21ea9ddafd541f5621->enter($__internal_fc1e0d943574b087c5d97cadf56b32351626137fb7f79a21ea9ddafd541f5621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_78819e590de582d30b23bf389b629e1489d199be20a98583ebe4548b18db7318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78819e590de582d30b23bf389b629e1489d199be20a98583ebe4548b18db7318->enter($__internal_78819e590de582d30b23bf389b629e1489d199be20a98583ebe4548b18db7318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_fc1e0d943574b087c5d97cadf56b32351626137fb7f79a21ea9ddafd541f5621->leave($__internal_fc1e0d943574b087c5d97cadf56b32351626137fb7f79a21ea9ddafd541f5621_prof);

        
        $__internal_78819e590de582d30b23bf389b629e1489d199be20a98583ebe4548b18db7318->leave($__internal_78819e590de582d30b23bf389b629e1489d199be20a98583ebe4548b18db7318_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_92170b003c4a4e1ee8a049e83a7e7b343fc3846c0c74b6fd4a2ff7c00bc0b099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92170b003c4a4e1ee8a049e83a7e7b343fc3846c0c74b6fd4a2ff7c00bc0b099->enter($__internal_92170b003c4a4e1ee8a049e83a7e7b343fc3846c0c74b6fd4a2ff7c00bc0b099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_81554a86a40b434db7b097a520fe9919cec6bb9930cfa4d71d13760ed4870653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81554a86a40b434db7b097a520fe9919cec6bb9930cfa4d71d13760ed4870653->enter($__internal_81554a86a40b434db7b097a520fe9919cec6bb9930cfa4d71d13760ed4870653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_81554a86a40b434db7b097a520fe9919cec6bb9930cfa4d71d13760ed4870653->leave($__internal_81554a86a40b434db7b097a520fe9919cec6bb9930cfa4d71d13760ed4870653_prof);

        
        $__internal_92170b003c4a4e1ee8a049e83a7e7b343fc3846c0c74b6fd4a2ff7c00bc0b099->leave($__internal_92170b003c4a4e1ee8a049e83a7e7b343fc3846c0c74b6fd4a2ff7c00bc0b099_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_13ca272dc34746b8195c8526180e30c2f825d04fa470059f90188c3422fdd58c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ca272dc34746b8195c8526180e30c2f825d04fa470059f90188c3422fdd58c->enter($__internal_13ca272dc34746b8195c8526180e30c2f825d04fa470059f90188c3422fdd58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a2b5755ee5405468da5eb950648ed3d12c55aa3ee34832921b2685304f8cd5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b5755ee5405468da5eb950648ed3d12c55aa3ee34832921b2685304f8cd5bd->enter($__internal_a2b5755ee5405468da5eb950648ed3d12c55aa3ee34832921b2685304f8cd5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_a2b5755ee5405468da5eb950648ed3d12c55aa3ee34832921b2685304f8cd5bd->leave($__internal_a2b5755ee5405468da5eb950648ed3d12c55aa3ee34832921b2685304f8cd5bd_prof);

        
        $__internal_13ca272dc34746b8195c8526180e30c2f825d04fa470059f90188c3422fdd58c->leave($__internal_13ca272dc34746b8195c8526180e30c2f825d04fa470059f90188c3422fdd58c_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_0dbe51200aceaf7077d32ebbdf170ec5b61039fe1b26ed347722dd744e4d62ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbe51200aceaf7077d32ebbdf170ec5b61039fe1b26ed347722dd744e4d62ab->enter($__internal_0dbe51200aceaf7077d32ebbdf170ec5b61039fe1b26ed347722dd744e4d62ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_32e6f0aecfd1d43e31538b8310fd581bf72aaa686fe14e84b43c4aaefb094d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e6f0aecfd1d43e31538b8310fd581bf72aaa686fe14e84b43c4aaefb094d91->enter($__internal_32e6f0aecfd1d43e31538b8310fd581bf72aaa686fe14e84b43c4aaefb094d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_32e6f0aecfd1d43e31538b8310fd581bf72aaa686fe14e84b43c4aaefb094d91->leave($__internal_32e6f0aecfd1d43e31538b8310fd581bf72aaa686fe14e84b43c4aaefb094d91_prof);

        
        $__internal_0dbe51200aceaf7077d32ebbdf170ec5b61039fe1b26ed347722dd744e4d62ab->leave($__internal_0dbe51200aceaf7077d32ebbdf170ec5b61039fe1b26ed347722dd744e4d62ab_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_55ca848603c05ab0f4cf80bcde96b09a8d81a4bee83b7ea35a8c2176fc4e46c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ca848603c05ab0f4cf80bcde96b09a8d81a4bee83b7ea35a8c2176fc4e46c2->enter($__internal_55ca848603c05ab0f4cf80bcde96b09a8d81a4bee83b7ea35a8c2176fc4e46c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_a21ea93dc0d947abd346882b64ffa6acda71156de97bd932c963144b154f7685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21ea93dc0d947abd346882b64ffa6acda71156de97bd932c963144b154f7685->enter($__internal_a21ea93dc0d947abd346882b64ffa6acda71156de97bd932c963144b154f7685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_a7cf5bd0b80dd8599bee57c47eb191bebdbad0948d7583eb4052ec11122b16d2 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_24346f6e59d244558a4cf436f8d986baef9c1fef8bd2e363b79b1398f5b3d022 = "{{") && ('' === $__internal_24346f6e59d244558a4cf436f8d986baef9c1fef8bd2e363b79b1398f5b3d022 || 0 === strpos($__internal_a7cf5bd0b80dd8599bee57c47eb191bebdbad0948d7583eb4052ec11122b16d2, $__internal_24346f6e59d244558a4cf436f8d986baef9c1fef8bd2e363b79b1398f5b3d022)));
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
        
        $__internal_a21ea93dc0d947abd346882b64ffa6acda71156de97bd932c963144b154f7685->leave($__internal_a21ea93dc0d947abd346882b64ffa6acda71156de97bd932c963144b154f7685_prof);

        
        $__internal_55ca848603c05ab0f4cf80bcde96b09a8d81a4bee83b7ea35a8c2176fc4e46c2->leave($__internal_55ca848603c05ab0f4cf80bcde96b09a8d81a4bee83b7ea35a8c2176fc4e46c2_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_86d7c63566b552c0c1dfe032fcf0adbbe3a473d523a10b7c93beb2cebe070e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d7c63566b552c0c1dfe032fcf0adbbe3a473d523a10b7c93beb2cebe070e99->enter($__internal_86d7c63566b552c0c1dfe032fcf0adbbe3a473d523a10b7c93beb2cebe070e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_962e8b0a5d7bd9fb84dc37db0feaf45b54d28faa1c00ffc1a3f475aebb0e1973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962e8b0a5d7bd9fb84dc37db0feaf45b54d28faa1c00ffc1a3f475aebb0e1973->enter($__internal_962e8b0a5d7bd9fb84dc37db0feaf45b54d28faa1c00ffc1a3f475aebb0e1973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_962e8b0a5d7bd9fb84dc37db0feaf45b54d28faa1c00ffc1a3f475aebb0e1973->leave($__internal_962e8b0a5d7bd9fb84dc37db0feaf45b54d28faa1c00ffc1a3f475aebb0e1973_prof);

        
        $__internal_86d7c63566b552c0c1dfe032fcf0adbbe3a473d523a10b7c93beb2cebe070e99->leave($__internal_86d7c63566b552c0c1dfe032fcf0adbbe3a473d523a10b7c93beb2cebe070e99_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_893d5de89eaabe5fde2cc73b531d1ddad8ddee99f8345d32642e186add5805f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893d5de89eaabe5fde2cc73b531d1ddad8ddee99f8345d32642e186add5805f5->enter($__internal_893d5de89eaabe5fde2cc73b531d1ddad8ddee99f8345d32642e186add5805f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_219fc3e1e606580f4ed2548cddfdb5e6da27b31321556eb2f6370e102c7bf694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219fc3e1e606580f4ed2548cddfdb5e6da27b31321556eb2f6370e102c7bf694->enter($__internal_219fc3e1e606580f4ed2548cddfdb5e6da27b31321556eb2f6370e102c7bf694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_219fc3e1e606580f4ed2548cddfdb5e6da27b31321556eb2f6370e102c7bf694->leave($__internal_219fc3e1e606580f4ed2548cddfdb5e6da27b31321556eb2f6370e102c7bf694_prof);

        
        $__internal_893d5de89eaabe5fde2cc73b531d1ddad8ddee99f8345d32642e186add5805f5->leave($__internal_893d5de89eaabe5fde2cc73b531d1ddad8ddee99f8345d32642e186add5805f5_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_ef50b5ad27745e97404d5b61bbe9f29fd392c735c38c163cb4c070dda0f8576e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef50b5ad27745e97404d5b61bbe9f29fd392c735c38c163cb4c070dda0f8576e->enter($__internal_ef50b5ad27745e97404d5b61bbe9f29fd392c735c38c163cb4c070dda0f8576e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6762b5fd1771c50241fab91b2229160b4a427e5268ef94689a1fdfd987061f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6762b5fd1771c50241fab91b2229160b4a427e5268ef94689a1fdfd987061f5c->enter($__internal_6762b5fd1771c50241fab91b2229160b4a427e5268ef94689a1fdfd987061f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_6762b5fd1771c50241fab91b2229160b4a427e5268ef94689a1fdfd987061f5c->leave($__internal_6762b5fd1771c50241fab91b2229160b4a427e5268ef94689a1fdfd987061f5c_prof);

        
        $__internal_ef50b5ad27745e97404d5b61bbe9f29fd392c735c38c163cb4c070dda0f8576e->leave($__internal_ef50b5ad27745e97404d5b61bbe9f29fd392c735c38c163cb4c070dda0f8576e_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_bb1ba08a6dee877258dc81e5fad566fd063c3edf89675c1755721dd04bb1d00d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1ba08a6dee877258dc81e5fad566fd063c3edf89675c1755721dd04bb1d00d->enter($__internal_bb1ba08a6dee877258dc81e5fad566fd063c3edf89675c1755721dd04bb1d00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_7f6357c8b81dfd7f173e620ceb82761b1babeaf0dd3587247a173456dbf95226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6357c8b81dfd7f173e620ceb82761b1babeaf0dd3587247a173456dbf95226->enter($__internal_7f6357c8b81dfd7f173e620ceb82761b1babeaf0dd3587247a173456dbf95226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_7f6357c8b81dfd7f173e620ceb82761b1babeaf0dd3587247a173456dbf95226->leave($__internal_7f6357c8b81dfd7f173e620ceb82761b1babeaf0dd3587247a173456dbf95226_prof);

        
        $__internal_bb1ba08a6dee877258dc81e5fad566fd063c3edf89675c1755721dd04bb1d00d->leave($__internal_bb1ba08a6dee877258dc81e5fad566fd063c3edf89675c1755721dd04bb1d00d_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_7d563f44054d5efbd1f2414f53dfd16a0738c9d9104e5a696085eb6008599c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d563f44054d5efbd1f2414f53dfd16a0738c9d9104e5a696085eb6008599c2b->enter($__internal_7d563f44054d5efbd1f2414f53dfd16a0738c9d9104e5a696085eb6008599c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_45eb1bbae61d70aa801fe054ae5f00b9f4696971bd8a7c26bf8a164dbc136b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45eb1bbae61d70aa801fe054ae5f00b9f4696971bd8a7c26bf8a164dbc136b18->enter($__internal_45eb1bbae61d70aa801fe054ae5f00b9f4696971bd8a7c26bf8a164dbc136b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_45eb1bbae61d70aa801fe054ae5f00b9f4696971bd8a7c26bf8a164dbc136b18->leave($__internal_45eb1bbae61d70aa801fe054ae5f00b9f4696971bd8a7c26bf8a164dbc136b18_prof);

        
        $__internal_7d563f44054d5efbd1f2414f53dfd16a0738c9d9104e5a696085eb6008599c2b->leave($__internal_7d563f44054d5efbd1f2414f53dfd16a0738c9d9104e5a696085eb6008599c2b_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_8105363b217ad0259cb39973fb4164a2c20c687b79919ddfcb88adfe22aae58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8105363b217ad0259cb39973fb4164a2c20c687b79919ddfcb88adfe22aae58d->enter($__internal_8105363b217ad0259cb39973fb4164a2c20c687b79919ddfcb88adfe22aae58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1cd70c056d8e639a47a0c17d7c6a543fe18edded6574dedad1e563ee3ad553db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd70c056d8e639a47a0c17d7c6a543fe18edded6574dedad1e563ee3ad553db->enter($__internal_1cd70c056d8e639a47a0c17d7c6a543fe18edded6574dedad1e563ee3ad553db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_1cd70c056d8e639a47a0c17d7c6a543fe18edded6574dedad1e563ee3ad553db->leave($__internal_1cd70c056d8e639a47a0c17d7c6a543fe18edded6574dedad1e563ee3ad553db_prof);

        
        $__internal_8105363b217ad0259cb39973fb4164a2c20c687b79919ddfcb88adfe22aae58d->leave($__internal_8105363b217ad0259cb39973fb4164a2c20c687b79919ddfcb88adfe22aae58d_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_8de079d944fc4470728bd79249fc645330de08efc1ddda5b431bfbfc13abc93a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de079d944fc4470728bd79249fc645330de08efc1ddda5b431bfbfc13abc93a->enter($__internal_8de079d944fc4470728bd79249fc645330de08efc1ddda5b431bfbfc13abc93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_cd88cfc9be6416939a540beb586cd8bbffaa191bf116af642d2b4a7a36875b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd88cfc9be6416939a540beb586cd8bbffaa191bf116af642d2b4a7a36875b7b->enter($__internal_cd88cfc9be6416939a540beb586cd8bbffaa191bf116af642d2b4a7a36875b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_cd88cfc9be6416939a540beb586cd8bbffaa191bf116af642d2b4a7a36875b7b->leave($__internal_cd88cfc9be6416939a540beb586cd8bbffaa191bf116af642d2b4a7a36875b7b_prof);

        
        $__internal_8de079d944fc4470728bd79249fc645330de08efc1ddda5b431bfbfc13abc93a->leave($__internal_8de079d944fc4470728bd79249fc645330de08efc1ddda5b431bfbfc13abc93a_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f3c976c3c372c57cfc64cbd5a4df2d18f80e313d569a96cd394f0f64be8d5a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c976c3c372c57cfc64cbd5a4df2d18f80e313d569a96cd394f0f64be8d5a7f->enter($__internal_f3c976c3c372c57cfc64cbd5a4df2d18f80e313d569a96cd394f0f64be8d5a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_012a8fc9f119ce27cb35004f5ab4c27ac7047e60e6186749fadf84dbc91a24d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012a8fc9f119ce27cb35004f5ab4c27ac7047e60e6186749fadf84dbc91a24d2->enter($__internal_012a8fc9f119ce27cb35004f5ab4c27ac7047e60e6186749fadf84dbc91a24d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_012a8fc9f119ce27cb35004f5ab4c27ac7047e60e6186749fadf84dbc91a24d2->leave($__internal_012a8fc9f119ce27cb35004f5ab4c27ac7047e60e6186749fadf84dbc91a24d2_prof);

        
        $__internal_f3c976c3c372c57cfc64cbd5a4df2d18f80e313d569a96cd394f0f64be8d5a7f->leave($__internal_f3c976c3c372c57cfc64cbd5a4df2d18f80e313d569a96cd394f0f64be8d5a7f_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_21c95033fa64d70b0c7b77bdcedc127629639d9bf81716fbe35aaeb6d38b1e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c95033fa64d70b0c7b77bdcedc127629639d9bf81716fbe35aaeb6d38b1e81->enter($__internal_21c95033fa64d70b0c7b77bdcedc127629639d9bf81716fbe35aaeb6d38b1e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_d88b529c6f364543f833113a5e4cc00c8c0b7c9a974034860f5936642b3b89e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88b529c6f364543f833113a5e4cc00c8c0b7c9a974034860f5936642b3b89e1->enter($__internal_d88b529c6f364543f833113a5e4cc00c8c0b7c9a974034860f5936642b3b89e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_d88b529c6f364543f833113a5e4cc00c8c0b7c9a974034860f5936642b3b89e1->leave($__internal_d88b529c6f364543f833113a5e4cc00c8c0b7c9a974034860f5936642b3b89e1_prof);

        
        $__internal_21c95033fa64d70b0c7b77bdcedc127629639d9bf81716fbe35aaeb6d38b1e81->leave($__internal_21c95033fa64d70b0c7b77bdcedc127629639d9bf81716fbe35aaeb6d38b1e81_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5cff687838a516a509e8451162aab5e374d73981182c86a8eab870d49a92ca9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cff687838a516a509e8451162aab5e374d73981182c86a8eab870d49a92ca9d->enter($__internal_5cff687838a516a509e8451162aab5e374d73981182c86a8eab870d49a92ca9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_543a93fd1d2c7bcf3efba1a54c1a8d3521a4f073475d9a4df69b1344d840b489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543a93fd1d2c7bcf3efba1a54c1a8d3521a4f073475d9a4df69b1344d840b489->enter($__internal_543a93fd1d2c7bcf3efba1a54c1a8d3521a4f073475d9a4df69b1344d840b489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_543a93fd1d2c7bcf3efba1a54c1a8d3521a4f073475d9a4df69b1344d840b489->leave($__internal_543a93fd1d2c7bcf3efba1a54c1a8d3521a4f073475d9a4df69b1344d840b489_prof);

        
        $__internal_5cff687838a516a509e8451162aab5e374d73981182c86a8eab870d49a92ca9d->leave($__internal_5cff687838a516a509e8451162aab5e374d73981182c86a8eab870d49a92ca9d_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_2a97e10fe329ff88cb9b903ec16cffd179a7ffc8ff50db445cacb4ac2871ad4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a97e10fe329ff88cb9b903ec16cffd179a7ffc8ff50db445cacb4ac2871ad4c->enter($__internal_2a97e10fe329ff88cb9b903ec16cffd179a7ffc8ff50db445cacb4ac2871ad4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_4b21b8ad477587043e86c79987bc3909ba531e08a693e04da16c223f5f5bfb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b21b8ad477587043e86c79987bc3909ba531e08a693e04da16c223f5f5bfb44->enter($__internal_4b21b8ad477587043e86c79987bc3909ba531e08a693e04da16c223f5f5bfb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_4b21b8ad477587043e86c79987bc3909ba531e08a693e04da16c223f5f5bfb44->leave($__internal_4b21b8ad477587043e86c79987bc3909ba531e08a693e04da16c223f5f5bfb44_prof);

        
        $__internal_2a97e10fe329ff88cb9b903ec16cffd179a7ffc8ff50db445cacb4ac2871ad4c->leave($__internal_2a97e10fe329ff88cb9b903ec16cffd179a7ffc8ff50db445cacb4ac2871ad4c_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_f0d436b4a83ea476f3f0266575e2dc0447170bed1df2cc88de3cc656097a9f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d436b4a83ea476f3f0266575e2dc0447170bed1df2cc88de3cc656097a9f25->enter($__internal_f0d436b4a83ea476f3f0266575e2dc0447170bed1df2cc88de3cc656097a9f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_59fc2c3c71d54b11db6b2d4bb563aef0f2a5262c3a5ff26a69eca91fbe4254cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fc2c3c71d54b11db6b2d4bb563aef0f2a5262c3a5ff26a69eca91fbe4254cf->enter($__internal_59fc2c3c71d54b11db6b2d4bb563aef0f2a5262c3a5ff26a69eca91fbe4254cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_59fc2c3c71d54b11db6b2d4bb563aef0f2a5262c3a5ff26a69eca91fbe4254cf->leave($__internal_59fc2c3c71d54b11db6b2d4bb563aef0f2a5262c3a5ff26a69eca91fbe4254cf_prof);

        
        $__internal_f0d436b4a83ea476f3f0266575e2dc0447170bed1df2cc88de3cc656097a9f25->leave($__internal_f0d436b4a83ea476f3f0266575e2dc0447170bed1df2cc88de3cc656097a9f25_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_3149d8798d8620a961316a59ed45085adca17528adac2aa291f38c64a30090d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3149d8798d8620a961316a59ed45085adca17528adac2aa291f38c64a30090d3->enter($__internal_3149d8798d8620a961316a59ed45085adca17528adac2aa291f38c64a30090d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_1fb0b9fbd7ae284bb02b2deebcf402a070d3d5def8593d7a0eb267b85c2a9da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb0b9fbd7ae284bb02b2deebcf402a070d3d5def8593d7a0eb267b85c2a9da0->enter($__internal_1fb0b9fbd7ae284bb02b2deebcf402a070d3d5def8593d7a0eb267b85c2a9da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1fb0b9fbd7ae284bb02b2deebcf402a070d3d5def8593d7a0eb267b85c2a9da0->leave($__internal_1fb0b9fbd7ae284bb02b2deebcf402a070d3d5def8593d7a0eb267b85c2a9da0_prof);

        
        $__internal_3149d8798d8620a961316a59ed45085adca17528adac2aa291f38c64a30090d3->leave($__internal_3149d8798d8620a961316a59ed45085adca17528adac2aa291f38c64a30090d3_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_8fd59f9e8cfa879e0e598834c77cbba09ad833b86c9b722ed1335b515bafbe68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd59f9e8cfa879e0e598834c77cbba09ad833b86c9b722ed1335b515bafbe68->enter($__internal_8fd59f9e8cfa879e0e598834c77cbba09ad833b86c9b722ed1335b515bafbe68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_4c312ef1cf6ebde9fe0fa388c16a21137d75eb57dcf5b46e14d5ed28d4e1a316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c312ef1cf6ebde9fe0fa388c16a21137d75eb57dcf5b46e14d5ed28d4e1a316->enter($__internal_4c312ef1cf6ebde9fe0fa388c16a21137d75eb57dcf5b46e14d5ed28d4e1a316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_4c312ef1cf6ebde9fe0fa388c16a21137d75eb57dcf5b46e14d5ed28d4e1a316->leave($__internal_4c312ef1cf6ebde9fe0fa388c16a21137d75eb57dcf5b46e14d5ed28d4e1a316_prof);

        
        $__internal_8fd59f9e8cfa879e0e598834c77cbba09ad833b86c9b722ed1335b515bafbe68->leave($__internal_8fd59f9e8cfa879e0e598834c77cbba09ad833b86c9b722ed1335b515bafbe68_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_73ea0f986887c308cb93f789ddbb0d551571e522fd40a7b78f5007cccab27728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ea0f986887c308cb93f789ddbb0d551571e522fd40a7b78f5007cccab27728->enter($__internal_73ea0f986887c308cb93f789ddbb0d551571e522fd40a7b78f5007cccab27728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0ec300da674a668fe09502c54101816c6348dce4c48ec43a185bad79b66333e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec300da674a668fe09502c54101816c6348dce4c48ec43a185bad79b66333e2->enter($__internal_0ec300da674a668fe09502c54101816c6348dce4c48ec43a185bad79b66333e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_0ec300da674a668fe09502c54101816c6348dce4c48ec43a185bad79b66333e2->leave($__internal_0ec300da674a668fe09502c54101816c6348dce4c48ec43a185bad79b66333e2_prof);

        
        $__internal_73ea0f986887c308cb93f789ddbb0d551571e522fd40a7b78f5007cccab27728->leave($__internal_73ea0f986887c308cb93f789ddbb0d551571e522fd40a7b78f5007cccab27728_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_6f854a2ba781dab1408d47bdbaa1e205e6544e73c3a6946d97299c3d0b42cc73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f854a2ba781dab1408d47bdbaa1e205e6544e73c3a6946d97299c3d0b42cc73->enter($__internal_6f854a2ba781dab1408d47bdbaa1e205e6544e73c3a6946d97299c3d0b42cc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f27ca72b31355dad2932b98598ef252d526a519f46d8c37a75718e2ef264db24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27ca72b31355dad2932b98598ef252d526a519f46d8c37a75718e2ef264db24->enter($__internal_f27ca72b31355dad2932b98598ef252d526a519f46d8c37a75718e2ef264db24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_f27ca72b31355dad2932b98598ef252d526a519f46d8c37a75718e2ef264db24->leave($__internal_f27ca72b31355dad2932b98598ef252d526a519f46d8c37a75718e2ef264db24_prof);

        
        $__internal_6f854a2ba781dab1408d47bdbaa1e205e6544e73c3a6946d97299c3d0b42cc73->leave($__internal_6f854a2ba781dab1408d47bdbaa1e205e6544e73c3a6946d97299c3d0b42cc73_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_84501f4cbea44adbcbd22827e66f7311a73bb9f9cf8481094d1f87ea48c88b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84501f4cbea44adbcbd22827e66f7311a73bb9f9cf8481094d1f87ea48c88b10->enter($__internal_84501f4cbea44adbcbd22827e66f7311a73bb9f9cf8481094d1f87ea48c88b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_4259641b660a3fd2804e7e7f7492bcd6f337661c115afba8c5744d4216b7a617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4259641b660a3fd2804e7e7f7492bcd6f337661c115afba8c5744d4216b7a617->enter($__internal_4259641b660a3fd2804e7e7f7492bcd6f337661c115afba8c5744d4216b7a617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4259641b660a3fd2804e7e7f7492bcd6f337661c115afba8c5744d4216b7a617->leave($__internal_4259641b660a3fd2804e7e7f7492bcd6f337661c115afba8c5744d4216b7a617_prof);

        
        $__internal_84501f4cbea44adbcbd22827e66f7311a73bb9f9cf8481094d1f87ea48c88b10->leave($__internal_84501f4cbea44adbcbd22827e66f7311a73bb9f9cf8481094d1f87ea48c88b10_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_270af0cb61f9927a3fa406ad4464cd5143a9ca7a7517a68f059011ecd2d87abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270af0cb61f9927a3fa406ad4464cd5143a9ca7a7517a68f059011ecd2d87abc->enter($__internal_270af0cb61f9927a3fa406ad4464cd5143a9ca7a7517a68f059011ecd2d87abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_c44e2503e5116fc34d35c4a29a2d6119bca0895683e9e7a047704732cfaa2987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44e2503e5116fc34d35c4a29a2d6119bca0895683e9e7a047704732cfaa2987->enter($__internal_c44e2503e5116fc34d35c4a29a2d6119bca0895683e9e7a047704732cfaa2987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c44e2503e5116fc34d35c4a29a2d6119bca0895683e9e7a047704732cfaa2987->leave($__internal_c44e2503e5116fc34d35c4a29a2d6119bca0895683e9e7a047704732cfaa2987_prof);

        
        $__internal_270af0cb61f9927a3fa406ad4464cd5143a9ca7a7517a68f059011ecd2d87abc->leave($__internal_270af0cb61f9927a3fa406ad4464cd5143a9ca7a7517a68f059011ecd2d87abc_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_8bc75a9cfdb76c2239200cda92b3c88dcf0127bf32c475bcbbd054d8d3d7ca34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc75a9cfdb76c2239200cda92b3c88dcf0127bf32c475bcbbd054d8d3d7ca34->enter($__internal_8bc75a9cfdb76c2239200cda92b3c88dcf0127bf32c475bcbbd054d8d3d7ca34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_fc84b739cf999f2bca596cfb485b94defc47f3a6c267f139d0df7ba643ed6f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc84b739cf999f2bca596cfb485b94defc47f3a6c267f139d0df7ba643ed6f3c->enter($__internal_fc84b739cf999f2bca596cfb485b94defc47f3a6c267f139d0df7ba643ed6f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fc84b739cf999f2bca596cfb485b94defc47f3a6c267f139d0df7ba643ed6f3c->leave($__internal_fc84b739cf999f2bca596cfb485b94defc47f3a6c267f139d0df7ba643ed6f3c_prof);

        
        $__internal_8bc75a9cfdb76c2239200cda92b3c88dcf0127bf32c475bcbbd054d8d3d7ca34->leave($__internal_8bc75a9cfdb76c2239200cda92b3c88dcf0127bf32c475bcbbd054d8d3d7ca34_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d791200fe575e699a343042bf059706b681ff2d1464adb23d5fd29a01daea976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d791200fe575e699a343042bf059706b681ff2d1464adb23d5fd29a01daea976->enter($__internal_d791200fe575e699a343042bf059706b681ff2d1464adb23d5fd29a01daea976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_1ff9300a6a6ba8785683d5a805cba6a95c82632d836a32d97412b5fd4733d21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff9300a6a6ba8785683d5a805cba6a95c82632d836a32d97412b5fd4733d21e->enter($__internal_1ff9300a6a6ba8785683d5a805cba6a95c82632d836a32d97412b5fd4733d21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1ff9300a6a6ba8785683d5a805cba6a95c82632d836a32d97412b5fd4733d21e->leave($__internal_1ff9300a6a6ba8785683d5a805cba6a95c82632d836a32d97412b5fd4733d21e_prof);

        
        $__internal_d791200fe575e699a343042bf059706b681ff2d1464adb23d5fd29a01daea976->leave($__internal_d791200fe575e699a343042bf059706b681ff2d1464adb23d5fd29a01daea976_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_591572158eb8a500ed2865e2c73840ed0f85508802989921fb86bd7f53e81c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591572158eb8a500ed2865e2c73840ed0f85508802989921fb86bd7f53e81c00->enter($__internal_591572158eb8a500ed2865e2c73840ed0f85508802989921fb86bd7f53e81c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9c42233111a89ca79ac8bce8e406eb62ab7065a3334b2f7ddd5e32631de556a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c42233111a89ca79ac8bce8e406eb62ab7065a3334b2f7ddd5e32631de556a9->enter($__internal_9c42233111a89ca79ac8bce8e406eb62ab7065a3334b2f7ddd5e32631de556a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_9c42233111a89ca79ac8bce8e406eb62ab7065a3334b2f7ddd5e32631de556a9->leave($__internal_9c42233111a89ca79ac8bce8e406eb62ab7065a3334b2f7ddd5e32631de556a9_prof);

        
        $__internal_591572158eb8a500ed2865e2c73840ed0f85508802989921fb86bd7f53e81c00->leave($__internal_591572158eb8a500ed2865e2c73840ed0f85508802989921fb86bd7f53e81c00_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_bf42283351b28cb6f654bb4a53c1be2b4eaff9947525f1ed2d0445577688ce0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf42283351b28cb6f654bb4a53c1be2b4eaff9947525f1ed2d0445577688ce0b->enter($__internal_bf42283351b28cb6f654bb4a53c1be2b4eaff9947525f1ed2d0445577688ce0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_71558bf6968da1786b2a419f49b68620a64cb143642309db85a69d997d343c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71558bf6968da1786b2a419f49b68620a64cb143642309db85a69d997d343c45->enter($__internal_71558bf6968da1786b2a419f49b68620a64cb143642309db85a69d997d343c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_71558bf6968da1786b2a419f49b68620a64cb143642309db85a69d997d343c45->leave($__internal_71558bf6968da1786b2a419f49b68620a64cb143642309db85a69d997d343c45_prof);

        
        $__internal_bf42283351b28cb6f654bb4a53c1be2b4eaff9947525f1ed2d0445577688ce0b->leave($__internal_bf42283351b28cb6f654bb4a53c1be2b4eaff9947525f1ed2d0445577688ce0b_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_654a1c34def4a69208c13dd54f6a18543a496cf8d2edf0f3f15854cf72cf91e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654a1c34def4a69208c13dd54f6a18543a496cf8d2edf0f3f15854cf72cf91e8->enter($__internal_654a1c34def4a69208c13dd54f6a18543a496cf8d2edf0f3f15854cf72cf91e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_150aea899fe36871751ff0e32f69bc331e736709b1decc354badf7d9f06fa257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150aea899fe36871751ff0e32f69bc331e736709b1decc354badf7d9f06fa257->enter($__internal_150aea899fe36871751ff0e32f69bc331e736709b1decc354badf7d9f06fa257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_150aea899fe36871751ff0e32f69bc331e736709b1decc354badf7d9f06fa257->leave($__internal_150aea899fe36871751ff0e32f69bc331e736709b1decc354badf7d9f06fa257_prof);

        
        $__internal_654a1c34def4a69208c13dd54f6a18543a496cf8d2edf0f3f15854cf72cf91e8->leave($__internal_654a1c34def4a69208c13dd54f6a18543a496cf8d2edf0f3f15854cf72cf91e8_prof);

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
