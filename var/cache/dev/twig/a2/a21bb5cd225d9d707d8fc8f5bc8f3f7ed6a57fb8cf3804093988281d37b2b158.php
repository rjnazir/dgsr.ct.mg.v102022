<?php

/* form/custom_fields.html.twig */
class __TwigTemplate_4a860b000e2ddf0cd20e44b095d1cb92bdd86d2fe76c8823dcc3f98ac5ad0f53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
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
        $__internal_9ec77ddf2207bd4eb43576b9dfd9b3bab293fd41c6c66870e5ea184ada95f512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec77ddf2207bd4eb43576b9dfd9b3bab293fd41c6c66870e5ea184ada95f512->enter($__internal_9ec77ddf2207bd4eb43576b9dfd9b3bab293fd41c6c66870e5ea184ada95f512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/custom_fields.html.twig"));

        $__internal_ade8b56e345c474c80aa907e3e90d09b3be48c4c59a3f75f22c1e0c1d902dc00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade8b56e345c474c80aa907e3e90d09b3be48c4c59a3f75f22c1e0c1d902dc00->enter($__internal_ade8b56e345c474c80aa907e3e90d09b3be48c4c59a3f75f22c1e0c1d902dc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/custom_fields.html.twig"));

        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('form_row', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('number_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('text_widget', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('email_widget', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 87
        echo "    
";
        // line 88
        $this->displayBlock('field_widget', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 101
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 123
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 129
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        
        $__internal_9ec77ddf2207bd4eb43576b9dfd9b3bab293fd41c6c66870e5ea184ada95f512->leave($__internal_9ec77ddf2207bd4eb43576b9dfd9b3bab293fd41c6c66870e5ea184ada95f512_prof);

        
        $__internal_ade8b56e345c474c80aa907e3e90d09b3be48c4c59a3f75f22c1e0c1d902dc00->leave($__internal_ade8b56e345c474c80aa907e3e90d09b3be48c4c59a3f75f22c1e0c1d902dc00_prof);

    }

    // line 1
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_6099603dbb4271bbf5c9b18172eb5a9ca5acac03f2a85cbbcd2c0ead5627c36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6099603dbb4271bbf5c9b18172eb5a9ca5acac03f2a85cbbcd2c0ead5627c36e->enter($__internal_6099603dbb4271bbf5c9b18172eb5a9ca5acac03f2a85cbbcd2c0ead5627c36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5e0642f626c5dcb661fe5f5eceb8202c1bf1a38b7b3ac2800435706d4e27f5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0642f626c5dcb661fe5f5eceb8202c1bf1a38b7b3ac2800435706d4e27f5bc->enter($__internal_5e0642f626c5dcb661fe5f5eceb8202c1bf1a38b7b3ac2800435706d4e27f5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 4
            echo "            <ul>
                ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 6
                echo "                    <li class=\"error-message\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "            </ul>
        ";
        }
        // line 10
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5e0642f626c5dcb661fe5f5eceb8202c1bf1a38b7b3ac2800435706d4e27f5bc->leave($__internal_5e0642f626c5dcb661fe5f5eceb8202c1bf1a38b7b3ac2800435706d4e27f5bc_prof);

        
        $__internal_6099603dbb4271bbf5c9b18172eb5a9ca5acac03f2a85cbbcd2c0ead5627c36e->leave($__internal_6099603dbb4271bbf5c9b18172eb5a9ca5acac03f2a85cbbcd2c0ead5627c36e_prof);

    }

    // line 13
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_1d885168533592d0ccb0cb208cbb003e670f63fdff7b35fc1b26f384acfb1277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d885168533592d0ccb0cb208cbb003e670f63fdff7b35fc1b26f384acfb1277->enter($__internal_1d885168533592d0ccb0cb208cbb003e670f63fdff7b35fc1b26f384acfb1277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_7ba923c609ac9e8080ed5b6c4832b165c27b811b2bcbf7f7de46a4c78d764425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba923c609ac9e8080ed5b6c4832b165c27b811b2bcbf7f7de46a4c78d764425->enter($__internal_7ba923c609ac9e8080ed5b6c4832b165c27b811b2bcbf7f7de46a4c78d764425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 14
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 15
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        ";
        }
        // line 18
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
    </div>
";
        
        $__internal_7ba923c609ac9e8080ed5b6c4832b165c27b811b2bcbf7f7de46a4c78d764425->leave($__internal_7ba923c609ac9e8080ed5b6c4832b165c27b811b2bcbf7f7de46a4c78d764425_prof);

        
        $__internal_1d885168533592d0ccb0cb208cbb003e670f63fdff7b35fc1b26f384acfb1277->leave($__internal_1d885168533592d0ccb0cb208cbb003e670f63fdff7b35fc1b26f384acfb1277_prof);

    }

    // line 23
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_16743867218359dde4af6d1656f567c62f32700fb37beff82309df4cecb68caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16743867218359dde4af6d1656f567c62f32700fb37beff82309df4cecb68caf->enter($__internal_16743867218359dde4af6d1656f567c62f32700fb37beff82309df4cecb68caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e3e3fbaca0811cf1842cf98004736e73a5b4a4a944d3b81a26b82786963151ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e3fbaca0811cf1842cf98004736e73a5b4a4a944d3b81a26b82786963151ce->enter($__internal_e3e3fbaca0811cf1842cf98004736e73a5b4a4a944d3b81a26b82786963151ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 24
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 25
        if ((($context["type"] ?? $this->getContext($context, "type")) == "file")) {
            // line 26
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
            // line 28
            echo "    ";
        } else {
            // line 30
            echo "        <input type=\"";
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
            // line 31
            echo "        
    ";
        }
        // line 32
        echo "    
";
        
        $__internal_e3e3fbaca0811cf1842cf98004736e73a5b4a4a944d3b81a26b82786963151ce->leave($__internal_e3e3fbaca0811cf1842cf98004736e73a5b4a4a944d3b81a26b82786963151ce_prof);

        
        $__internal_16743867218359dde4af6d1656f567c62f32700fb37beff82309df4cecb68caf->leave($__internal_16743867218359dde4af6d1656f567c62f32700fb37beff82309df4cecb68caf_prof);

    }

    // line 35
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1cb1a282abca462ed2be707c4488e5c5a5d708c787228617ca5528acd15e2606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb1a282abca462ed2be707c4488e5c5a5d708c787228617ca5528acd15e2606->enter($__internal_1cb1a282abca462ed2be707c4488e5c5a5d708c787228617ca5528acd15e2606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_29ee12bc78e51a01ce959388cb31f8d8ef52df696c4d9641e58013fbfd53541e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ee12bc78e51a01ce959388cb31f8d8ef52df696c4d9641e58013fbfd53541e->enter($__internal_29ee12bc78e51a01ce959388cb31f8d8ef52df696c4d9641e58013fbfd53541e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 36
        echo "    ";
        ob_start();
        // line 37
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 38
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 39
            echo "            <div class=\"form-group ";
            echo (((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) ? ("has-error") : (""));
            echo "\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6 col-lg-4\">
            ";
            // line 43
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "
                        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
            echo "
                        ";
            // line 45
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                    </div> 
                </div>
            </div> 
        ";
        } else {
            // line 50
            echo "            <div class=\"form-group ";
            echo (((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) ? ("has-error") : (""));
            echo "\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6 col-lg-4\">
            ";
            // line 54
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "
                        ";
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
            echo "
                        ";
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                    </div>
                </div>
            </div> 
        ";
        }
        // line 60
        echo "     
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_29ee12bc78e51a01ce959388cb31f8d8ef52df696c4d9641e58013fbfd53541e->leave($__internal_29ee12bc78e51a01ce959388cb31f8d8ef52df696c4d9641e58013fbfd53541e_prof);

        
        $__internal_1cb1a282abca462ed2be707c4488e5c5a5d708c787228617ca5528acd15e2606->leave($__internal_1cb1a282abca462ed2be707c4488e5c5a5d708c787228617ca5528acd15e2606_prof);

    }

    // line 64
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_0aa3a651336e34962b281a19012801e55c3bfd37858767e393ad81fa699b192d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa3a651336e34962b281a19012801e55c3bfd37858767e393ad81fa699b192d->enter($__internal_0aa3a651336e34962b281a19012801e55c3bfd37858767e393ad81fa699b192d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_f1f048cbb68a21f67b9f494aac84247656caebc5461b6415b934f2acecc48395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f048cbb68a21f67b9f494aac84247656caebc5461b6415b934f2acecc48395->enter($__internal_f1f048cbb68a21f67b9f494aac84247656caebc5461b6415b934f2acecc48395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 66
        echo "    <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
";
        
        $__internal_f1f048cbb68a21f67b9f494aac84247656caebc5461b6415b934f2acecc48395->leave($__internal_f1f048cbb68a21f67b9f494aac84247656caebc5461b6415b934f2acecc48395_prof);

        
        $__internal_0aa3a651336e34962b281a19012801e55c3bfd37858767e393ad81fa699b192d->leave($__internal_0aa3a651336e34962b281a19012801e55c3bfd37858767e393ad81fa699b192d_prof);

    }

    // line 70
    public function block_text_widget($context, array $blocks = array())
    {
        $__internal_118aca87617456a00febb8d81738bc4695a301367ae6498f4a32a34393681011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_118aca87617456a00febb8d81738bc4695a301367ae6498f4a32a34393681011->enter($__internal_118aca87617456a00febb8d81738bc4695a301367ae6498f4a32a34393681011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_a61365d944668405c4bf48a761170b1d13b0181aa0ddd2fa93100c95947f3fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61365d944668405c4bf48a761170b1d13b0181aa0ddd2fa93100c95947f3fea->enter($__internal_a61365d944668405c4bf48a761170b1d13b0181aa0ddd2fa93100c95947f3fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        // line 72
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\" />
";
        
        $__internal_a61365d944668405c4bf48a761170b1d13b0181aa0ddd2fa93100c95947f3fea->leave($__internal_a61365d944668405c4bf48a761170b1d13b0181aa0ddd2fa93100c95947f3fea_prof);

        
        $__internal_118aca87617456a00febb8d81738bc4695a301367ae6498f4a32a34393681011->leave($__internal_118aca87617456a00febb8d81738bc4695a301367ae6498f4a32a34393681011_prof);

    }

    // line 76
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_e4561c00ba664c928307339710c6effe6cb5d69c87e80573956a607ef661ba68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4561c00ba664c928307339710c6effe6cb5d69c87e80573956a607ef661ba68->enter($__internal_e4561c00ba664c928307339710c6effe6cb5d69c87e80573956a607ef661ba68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_e6e2bd1d97bf4e074ea91445c4830a015ccaf5bdfa437a022dc39a3fb5436d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e2bd1d97bf4e074ea91445c4830a015ccaf5bdfa437a022dc39a3fb5436d42->enter($__internal_e6e2bd1d97bf4e074ea91445c4830a015ccaf5bdfa437a022dc39a3fb5436d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 78
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\"/>
";
        
        $__internal_e6e2bd1d97bf4e074ea91445c4830a015ccaf5bdfa437a022dc39a3fb5436d42->leave($__internal_e6e2bd1d97bf4e074ea91445c4830a015ccaf5bdfa437a022dc39a3fb5436d42_prof);

        
        $__internal_e4561c00ba664c928307339710c6effe6cb5d69c87e80573956a607ef661ba68->leave($__internal_e4561c00ba664c928307339710c6effe6cb5d69c87e80573956a607ef661ba68_prof);

    }

    // line 82
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_cc54957c33d52b145a732917b5e80f3a5cf4da014dade3f0b1dfcffbb17a36fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc54957c33d52b145a732917b5e80f3a5cf4da014dade3f0b1dfcffbb17a36fe->enter($__internal_cc54957c33d52b145a732917b5e80f3a5cf4da014dade3f0b1dfcffbb17a36fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_a2c3eeb8d4d164e6bafc1da20690b4981f4fa7aa9444693e43dece890a8ad691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c3eeb8d4d164e6bafc1da20690b4981f4fa7aa9444693e43dece890a8ad691->enter($__internal_a2c3eeb8d4d164e6bafc1da20690b4981f4fa7aa9444693e43dece890a8ad691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 84
        echo "    <input oninvalid=\"setErrorClass(\$(this));\" class=\"checkbox-custom-style\" type=\"checkbox\" ";
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
        
        $__internal_a2c3eeb8d4d164e6bafc1da20690b4981f4fa7aa9444693e43dece890a8ad691->leave($__internal_a2c3eeb8d4d164e6bafc1da20690b4981f4fa7aa9444693e43dece890a8ad691_prof);

        
        $__internal_cc54957c33d52b145a732917b5e80f3a5cf4da014dade3f0b1dfcffbb17a36fe->leave($__internal_cc54957c33d52b145a732917b5e80f3a5cf4da014dade3f0b1dfcffbb17a36fe_prof);

    }

    // line 88
    public function block_field_widget($context, array $blocks = array())
    {
        $__internal_61b2b7beb3c70015ad27b938c63f398ef7e4930e2121d9580ece85d2b279f939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b2b7beb3c70015ad27b938c63f398ef7e4930e2121d9580ece85d2b279f939->enter($__internal_61b2b7beb3c70015ad27b938c63f398ef7e4930e2121d9580ece85d2b279f939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        $__internal_5ec24944a567a1334afa5dac9a05971fc2e5c66ac0835ef9a67c05087039e6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec24944a567a1334afa5dac9a05971fc2e5c66ac0835ef9a67c05087039e6f3->enter($__internal_5ec24944a567a1334afa5dac9a05971fc2e5c66ac0835ef9a67c05087039e6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        // line 89
        echo "    <div class=\"text_widget2\">
        <input oninvalid=\"setErrorClass(\$(this));\" type=\"text\" ";
        // line 90
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
    </div>
";
        
        $__internal_5ec24944a567a1334afa5dac9a05971fc2e5c66ac0835ef9a67c05087039e6f3->leave($__internal_5ec24944a567a1334afa5dac9a05971fc2e5c66ac0835ef9a67c05087039e6f3_prof);

        
        $__internal_61b2b7beb3c70015ad27b938c63f398ef7e4930e2121d9580ece85d2b279f939->leave($__internal_61b2b7beb3c70015ad27b938c63f398ef7e4930e2121d9580ece85d2b279f939_prof);

    }

    // line 94
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_3e1f186b5bf13430cf961adf4f7e727ee51d38698bf0e618e56e5485224684f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1f186b5bf13430cf961adf4f7e727ee51d38698bf0e618e56e5485224684f2->enter($__internal_3e1f186b5bf13430cf961adf4f7e727ee51d38698bf0e618e56e5485224684f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_fd1acfc417b55850c5b99f4933def12da5a732fc79ae41a20fce75234f2635a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1acfc417b55850c5b99f4933def12da5a732fc79ae41a20fce75234f2635a0->enter($__internal_fd1acfc417b55850c5b99f4933def12da5a732fc79ae41a20fce75234f2635a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 95
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 96
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'widget')));
            // line 97
            echo "    ";
        }
        // line 98
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
        
        $__internal_fd1acfc417b55850c5b99f4933def12da5a732fc79ae41a20fce75234f2635a0->leave($__internal_fd1acfc417b55850c5b99f4933def12da5a732fc79ae41a20fce75234f2635a0_prof);

        
        $__internal_3e1f186b5bf13430cf961adf4f7e727ee51d38698bf0e618e56e5485224684f2->leave($__internal_3e1f186b5bf13430cf961adf4f7e727ee51d38698bf0e618e56e5485224684f2_prof);

    }

    // line 101
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e371ef5ef1fd85b46e58c24f82a5ac02a9579ea9badd69f238ed85d73b24388d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e371ef5ef1fd85b46e58c24f82a5ac02a9579ea9badd69f238ed85d73b24388d->enter($__internal_e371ef5ef1fd85b46e58c24f82a5ac02a9579ea9badd69f238ed85d73b24388d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_2df98c9f892266a05c7cdc51114464bfebdc60ba2031ada2760ef6fc999abcd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df98c9f892266a05c7cdc51114464bfebdc60ba2031ada2760ef6fc999abcd9->enter($__internal_2df98c9f892266a05c7cdc51114464bfebdc60ba2031ada2760ef6fc999abcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 102
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 103
            $context["required"] = false;
        }
        // line 106
        echo "    <select oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 107
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 108
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 110
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 111
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 112
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 113
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 114
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 117
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 118
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 119
        echo "</select>
";
        
        $__internal_2df98c9f892266a05c7cdc51114464bfebdc60ba2031ada2760ef6fc999abcd9->leave($__internal_2df98c9f892266a05c7cdc51114464bfebdc60ba2031ada2760ef6fc999abcd9_prof);

        
        $__internal_e371ef5ef1fd85b46e58c24f82a5ac02a9579ea9badd69f238ed85d73b24388d->leave($__internal_e371ef5ef1fd85b46e58c24f82a5ac02a9579ea9badd69f238ed85d73b24388d_prof);

    }

    // line 123
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_af9332fceca5ef5f64a947a9eb2f73292afe36154a5b27e157cf3688c625e9ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af9332fceca5ef5f64a947a9eb2f73292afe36154a5b27e157cf3688c625e9ec->enter($__internal_af9332fceca5ef5f64a947a9eb2f73292afe36154a5b27e157cf3688c625e9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a5212552d0c225ec8266d2dfc8a8589f151cd75065d9fafb8589c572b578ed53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5212552d0c225ec8266d2dfc8a8589f151cd75065d9fafb8589c572b578ed53->enter($__internal_a5212552d0c225ec8266d2dfc8a8589f151cd75065d9fafb8589c572b578ed53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 125
        echo "        <textarea oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        
        $__internal_a5212552d0c225ec8266d2dfc8a8589f151cd75065d9fafb8589c572b578ed53->leave($__internal_a5212552d0c225ec8266d2dfc8a8589f151cd75065d9fafb8589c572b578ed53_prof);

        
        $__internal_af9332fceca5ef5f64a947a9eb2f73292afe36154a5b27e157cf3688c625e9ec->leave($__internal_af9332fceca5ef5f64a947a9eb2f73292afe36154a5b27e157cf3688c625e9ec_prof);

    }

    // line 129
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_de44eced14151eb92a683661f64c318879d24c56040bdde8c3a6d19b1feb130f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de44eced14151eb92a683661f64c318879d24c56040bdde8c3a6d19b1feb130f->enter($__internal_de44eced14151eb92a683661f64c318879d24c56040bdde8c3a6d19b1feb130f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_14de02d56c553d321ec52b1af489e307828156df052a99bfc3b55ff105fbc4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14de02d56c553d321ec52b1af489e307828156df052a99bfc3b55ff105fbc4bd->enter($__internal_14de02d56c553d321ec52b1af489e307828156df052a99bfc3b55ff105fbc4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 130
        echo "<div class=\"col-sm-10\">";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 132
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 133
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "</div>";
        
        $__internal_14de02d56c553d321ec52b1af489e307828156df052a99bfc3b55ff105fbc4bd->leave($__internal_14de02d56c553d321ec52b1af489e307828156df052a99bfc3b55ff105fbc4bd_prof);

        
        $__internal_de44eced14151eb92a683661f64c318879d24c56040bdde8c3a6d19b1feb130f->leave($__internal_de44eced14151eb92a683661f64c318879d24c56040bdde8c3a6d19b1feb130f_prof);

    }

    public function getTemplateName()
    {
        return "form/custom_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  586 => 135,  580 => 133,  578 => 132,  574 => 131,  572 => 130,  563 => 129,  548 => 125,  539 => 123,  528 => 119,  526 => 118,  524 => 117,  518 => 114,  516 => 113,  514 => 112,  512 => 111,  510 => 110,  501 => 108,  499 => 107,  492 => 106,  489 => 103,  487 => 102,  478 => 101,  465 => 98,  462 => 97,  459 => 96,  456 => 95,  447 => 94,  432 => 90,  429 => 89,  420 => 88,  399 => 84,  390 => 82,  375 => 78,  366 => 76,  351 => 72,  342 => 70,  327 => 66,  318 => 64,  306 => 60,  298 => 56,  294 => 55,  289 => 54,  282 => 50,  274 => 45,  270 => 44,  265 => 43,  258 => 39,  256 => 38,  254 => 37,  251 => 36,  242 => 35,  231 => 32,  227 => 31,  214 => 30,  211 => 28,  198 => 26,  196 => 25,  194 => 24,  185 => 23,  172 => 19,  167 => 18,  161 => 16,  159 => 15,  154 => 14,  145 => 13,  134 => 10,  130 => 8,  121 => 6,  117 => 5,  114 => 4,  111 => 3,  108 => 2,  99 => 1,  89 => 129,  87 => 123,  85 => 101,  83 => 94,  80 => 93,  78 => 88,  75 => 87,  73 => 82,  70 => 81,  68 => 76,  65 => 75,  63 => 70,  60 => 69,  58 => 64,  55 => 63,  53 => 35,  50 => 34,  48 => 23,  45 => 22,  43 => 13,  40 => 12,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form_errors %}
    {% spaceless %}
        {% if errors|length > 0 %}
            <ul>
                {% for error in errors %}
                    <li class=\"error-message\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endspaceless %}
{% endblock form_errors %}

{% block form_widget_compound %}
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
            <div class=\"form-group {{ errors|length > 0 ? 'has-error' : '' }}\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6 col-lg-4\">
            {#            {{ form_label(form, \"\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}#}
                        {{ form_label(form) }}
                        {{ form_widget(form, {'attr': attr}) }}
                        {{ form_errors(form) }}
                    </div> 
                </div>
            </div> 
        {% else %}
            <div class=\"form-group {{ errors|length > 0 ? 'has-error' : '' }}\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6 col-lg-4\">
            {#            {{ form_label(form, \"\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}#}
                        {{ form_label(form) }}
                        {{ form_widget(form, {'attr': attr}) }}
                        {{ form_errors(form) }}
                    </div>
                </div>
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
{%- endblock choice_widget_expanded -%}", "form/custom_fields.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app\\Resources\\views\\form\\custom_fields.html.twig");
    }
}
