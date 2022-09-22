<?php

/* :form:custom_fields.html.twig */
class __TwigTemplate_e56dfdaec253ea1a4dfeeb46b8cbd718d232b0e03af9c9d9169032ea20b838d8 extends Twig_Template
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
        $__internal_e1eb42aad54374bcf026cc8cd6b6bf0f00274ec807885e29fe6726a4a81f291e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1eb42aad54374bcf026cc8cd6b6bf0f00274ec807885e29fe6726a4a81f291e->enter($__internal_e1eb42aad54374bcf026cc8cd6b6bf0f00274ec807885e29fe6726a4a81f291e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:custom_fields.html.twig"));

        $__internal_42f8d79fdac22bf64567e1a5b3942d0a83309b2834ea435a423716443eb85ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f8d79fdac22bf64567e1a5b3942d0a83309b2834ea435a423716443eb85ca5->enter($__internal_42f8d79fdac22bf64567e1a5b3942d0a83309b2834ea435a423716443eb85ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:custom_fields.html.twig"));

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
        
        $__internal_e1eb42aad54374bcf026cc8cd6b6bf0f00274ec807885e29fe6726a4a81f291e->leave($__internal_e1eb42aad54374bcf026cc8cd6b6bf0f00274ec807885e29fe6726a4a81f291e_prof);

        
        $__internal_42f8d79fdac22bf64567e1a5b3942d0a83309b2834ea435a423716443eb85ca5->leave($__internal_42f8d79fdac22bf64567e1a5b3942d0a83309b2834ea435a423716443eb85ca5_prof);

    }

    // line 1
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_adbd3e93ccc3e690b5e96560984df8c78d8b3d45d77bba53b653d593edc6e356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adbd3e93ccc3e690b5e96560984df8c78d8b3d45d77bba53b653d593edc6e356->enter($__internal_adbd3e93ccc3e690b5e96560984df8c78d8b3d45d77bba53b653d593edc6e356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_e7b7d09ad7ae2ad24aa39ecae8854d5710ca629ea5efa200be20727f13ac4c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b7d09ad7ae2ad24aa39ecae8854d5710ca629ea5efa200be20727f13ac4c5c->enter($__internal_e7b7d09ad7ae2ad24aa39ecae8854d5710ca629ea5efa200be20727f13ac4c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_e7b7d09ad7ae2ad24aa39ecae8854d5710ca629ea5efa200be20727f13ac4c5c->leave($__internal_e7b7d09ad7ae2ad24aa39ecae8854d5710ca629ea5efa200be20727f13ac4c5c_prof);

        
        $__internal_adbd3e93ccc3e690b5e96560984df8c78d8b3d45d77bba53b653d593edc6e356->leave($__internal_adbd3e93ccc3e690b5e96560984df8c78d8b3d45d77bba53b653d593edc6e356_prof);

    }

    // line 13
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_e6271b7a3ad0afb73fbf18dae72bc38d661e3438f9e8ee0024f9f33467d15ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6271b7a3ad0afb73fbf18dae72bc38d661e3438f9e8ee0024f9f33467d15ea5->enter($__internal_e6271b7a3ad0afb73fbf18dae72bc38d661e3438f9e8ee0024f9f33467d15ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_563dfbd580728b2136146875f5d878dff2900667ce31122ee3f1dc2f4acf07a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563dfbd580728b2136146875f5d878dff2900667ce31122ee3f1dc2f4acf07a6->enter($__internal_563dfbd580728b2136146875f5d878dff2900667ce31122ee3f1dc2f4acf07a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_563dfbd580728b2136146875f5d878dff2900667ce31122ee3f1dc2f4acf07a6->leave($__internal_563dfbd580728b2136146875f5d878dff2900667ce31122ee3f1dc2f4acf07a6_prof);

        
        $__internal_e6271b7a3ad0afb73fbf18dae72bc38d661e3438f9e8ee0024f9f33467d15ea5->leave($__internal_e6271b7a3ad0afb73fbf18dae72bc38d661e3438f9e8ee0024f9f33467d15ea5_prof);

    }

    // line 23
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_952ac8f2c73ccb1d14e83402f206b7c8858dff1ff91df4b210c82bf5388cb8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952ac8f2c73ccb1d14e83402f206b7c8858dff1ff91df4b210c82bf5388cb8cf->enter($__internal_952ac8f2c73ccb1d14e83402f206b7c8858dff1ff91df4b210c82bf5388cb8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0ce2df93230199c0572df00a1d3d483df2eda59079370f5106b29f83c523a737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce2df93230199c0572df00a1d3d483df2eda59079370f5106b29f83c523a737->enter($__internal_0ce2df93230199c0572df00a1d3d483df2eda59079370f5106b29f83c523a737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_0ce2df93230199c0572df00a1d3d483df2eda59079370f5106b29f83c523a737->leave($__internal_0ce2df93230199c0572df00a1d3d483df2eda59079370f5106b29f83c523a737_prof);

        
        $__internal_952ac8f2c73ccb1d14e83402f206b7c8858dff1ff91df4b210c82bf5388cb8cf->leave($__internal_952ac8f2c73ccb1d14e83402f206b7c8858dff1ff91df4b210c82bf5388cb8cf_prof);

    }

    // line 35
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1fef1c8343bd5e78377e40fdc0a4df58127ac6eaed311199bc4c3c3a8c51f5d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fef1c8343bd5e78377e40fdc0a4df58127ac6eaed311199bc4c3c3a8c51f5d9->enter($__internal_1fef1c8343bd5e78377e40fdc0a4df58127ac6eaed311199bc4c3c3a8c51f5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9a5984d6bb8bec967f1ab48c43ca45e2659060cf775cda9bd0339e1820c9e3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5984d6bb8bec967f1ab48c43ca45e2659060cf775cda9bd0339e1820c9e3b4->enter($__internal_9a5984d6bb8bec967f1ab48c43ca45e2659060cf775cda9bd0339e1820c9e3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_9a5984d6bb8bec967f1ab48c43ca45e2659060cf775cda9bd0339e1820c9e3b4->leave($__internal_9a5984d6bb8bec967f1ab48c43ca45e2659060cf775cda9bd0339e1820c9e3b4_prof);

        
        $__internal_1fef1c8343bd5e78377e40fdc0a4df58127ac6eaed311199bc4c3c3a8c51f5d9->leave($__internal_1fef1c8343bd5e78377e40fdc0a4df58127ac6eaed311199bc4c3c3a8c51f5d9_prof);

    }

    // line 64
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_5c1df2bfe15682abea5947e9301dcfda38a2839763944b38499e5968bd4631a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1df2bfe15682abea5947e9301dcfda38a2839763944b38499e5968bd4631a0->enter($__internal_5c1df2bfe15682abea5947e9301dcfda38a2839763944b38499e5968bd4631a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_1dcaf6304a3659eab1e4425f2be0e93778c0a3451f021c5fadcb29a36fc2e453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dcaf6304a3659eab1e4425f2be0e93778c0a3451f021c5fadcb29a36fc2e453->enter($__internal_1dcaf6304a3659eab1e4425f2be0e93778c0a3451f021c5fadcb29a36fc2e453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 66
        echo "    <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
";
        
        $__internal_1dcaf6304a3659eab1e4425f2be0e93778c0a3451f021c5fadcb29a36fc2e453->leave($__internal_1dcaf6304a3659eab1e4425f2be0e93778c0a3451f021c5fadcb29a36fc2e453_prof);

        
        $__internal_5c1df2bfe15682abea5947e9301dcfda38a2839763944b38499e5968bd4631a0->leave($__internal_5c1df2bfe15682abea5947e9301dcfda38a2839763944b38499e5968bd4631a0_prof);

    }

    // line 70
    public function block_text_widget($context, array $blocks = array())
    {
        $__internal_fd274fd246a4b03c971aa1b45c2a06572bbd46e549e78be6533461bd1321e126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd274fd246a4b03c971aa1b45c2a06572bbd46e549e78be6533461bd1321e126->enter($__internal_fd274fd246a4b03c971aa1b45c2a06572bbd46e549e78be6533461bd1321e126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_4a1a12a048291700cb0e4e0cb479cb1e240fb6b695dd07380b81ea638ef1a291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1a12a048291700cb0e4e0cb479cb1e240fb6b695dd07380b81ea638ef1a291->enter($__internal_4a1a12a048291700cb0e4e0cb479cb1e240fb6b695dd07380b81ea638ef1a291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        // line 72
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\" />
";
        
        $__internal_4a1a12a048291700cb0e4e0cb479cb1e240fb6b695dd07380b81ea638ef1a291->leave($__internal_4a1a12a048291700cb0e4e0cb479cb1e240fb6b695dd07380b81ea638ef1a291_prof);

        
        $__internal_fd274fd246a4b03c971aa1b45c2a06572bbd46e549e78be6533461bd1321e126->leave($__internal_fd274fd246a4b03c971aa1b45c2a06572bbd46e549e78be6533461bd1321e126_prof);

    }

    // line 76
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_d317f3bf70518498f11b54ec7821af17068272f9ab0f43ed0cdb5b0884d5284e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d317f3bf70518498f11b54ec7821af17068272f9ab0f43ed0cdb5b0884d5284e->enter($__internal_d317f3bf70518498f11b54ec7821af17068272f9ab0f43ed0cdb5b0884d5284e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_8749fa79a7e19355c23307ce31c3d61f8c661eba4ed41e548b5cb01e20995bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8749fa79a7e19355c23307ce31c3d61f8c661eba4ed41e548b5cb01e20995bdf->enter($__internal_8749fa79a7e19355c23307ce31c3d61f8c661eba4ed41e548b5cb01e20995bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 78
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\"/>
";
        
        $__internal_8749fa79a7e19355c23307ce31c3d61f8c661eba4ed41e548b5cb01e20995bdf->leave($__internal_8749fa79a7e19355c23307ce31c3d61f8c661eba4ed41e548b5cb01e20995bdf_prof);

        
        $__internal_d317f3bf70518498f11b54ec7821af17068272f9ab0f43ed0cdb5b0884d5284e->leave($__internal_d317f3bf70518498f11b54ec7821af17068272f9ab0f43ed0cdb5b0884d5284e_prof);

    }

    // line 82
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a236ee4254345623fa1e41d8fda8294f0bb814616cee479b18dd8e1b8dab3fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a236ee4254345623fa1e41d8fda8294f0bb814616cee479b18dd8e1b8dab3fc2->enter($__internal_a236ee4254345623fa1e41d8fda8294f0bb814616cee479b18dd8e1b8dab3fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c0c81f2cf49ffd97c3297d422863f44cd090637ba0b55f3396bb451c912c7b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c81f2cf49ffd97c3297d422863f44cd090637ba0b55f3396bb451c912c7b80->enter($__internal_c0c81f2cf49ffd97c3297d422863f44cd090637ba0b55f3396bb451c912c7b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_c0c81f2cf49ffd97c3297d422863f44cd090637ba0b55f3396bb451c912c7b80->leave($__internal_c0c81f2cf49ffd97c3297d422863f44cd090637ba0b55f3396bb451c912c7b80_prof);

        
        $__internal_a236ee4254345623fa1e41d8fda8294f0bb814616cee479b18dd8e1b8dab3fc2->leave($__internal_a236ee4254345623fa1e41d8fda8294f0bb814616cee479b18dd8e1b8dab3fc2_prof);

    }

    // line 88
    public function block_field_widget($context, array $blocks = array())
    {
        $__internal_c458f334d056d8be2a19cb2cbd487153973fb018f3f4e7817c3ae189ae24efb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c458f334d056d8be2a19cb2cbd487153973fb018f3f4e7817c3ae189ae24efb3->enter($__internal_c458f334d056d8be2a19cb2cbd487153973fb018f3f4e7817c3ae189ae24efb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        $__internal_87b2eabf4aa0ae06e823480ef6ea1358c96e16c4f22787466258f5eb9a6a87b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b2eabf4aa0ae06e823480ef6ea1358c96e16c4f22787466258f5eb9a6a87b1->enter($__internal_87b2eabf4aa0ae06e823480ef6ea1358c96e16c4f22787466258f5eb9a6a87b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

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
        
        $__internal_87b2eabf4aa0ae06e823480ef6ea1358c96e16c4f22787466258f5eb9a6a87b1->leave($__internal_87b2eabf4aa0ae06e823480ef6ea1358c96e16c4f22787466258f5eb9a6a87b1_prof);

        
        $__internal_c458f334d056d8be2a19cb2cbd487153973fb018f3f4e7817c3ae189ae24efb3->leave($__internal_c458f334d056d8be2a19cb2cbd487153973fb018f3f4e7817c3ae189ae24efb3_prof);

    }

    // line 94
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_85dfe8fdbcd1bc5cf3e982641eca6ffb8c8e4de64f6f7e78309450ce1d73821e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85dfe8fdbcd1bc5cf3e982641eca6ffb8c8e4de64f6f7e78309450ce1d73821e->enter($__internal_85dfe8fdbcd1bc5cf3e982641eca6ffb8c8e4de64f6f7e78309450ce1d73821e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_80a1cbb3657a82e30564fd14ef47677a545ed17f56d7e563883d7f288110be2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a1cbb3657a82e30564fd14ef47677a545ed17f56d7e563883d7f288110be2e->enter($__internal_80a1cbb3657a82e30564fd14ef47677a545ed17f56d7e563883d7f288110be2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

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
        
        $__internal_80a1cbb3657a82e30564fd14ef47677a545ed17f56d7e563883d7f288110be2e->leave($__internal_80a1cbb3657a82e30564fd14ef47677a545ed17f56d7e563883d7f288110be2e_prof);

        
        $__internal_85dfe8fdbcd1bc5cf3e982641eca6ffb8c8e4de64f6f7e78309450ce1d73821e->leave($__internal_85dfe8fdbcd1bc5cf3e982641eca6ffb8c8e4de64f6f7e78309450ce1d73821e_prof);

    }

    // line 101
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_426f5a2c39fadb263d1f3e3e8d28eb567b4ee5e6246a8408030e47861218abf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426f5a2c39fadb263d1f3e3e8d28eb567b4ee5e6246a8408030e47861218abf2->enter($__internal_426f5a2c39fadb263d1f3e3e8d28eb567b4ee5e6246a8408030e47861218abf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_11e5f363e5a5d682a1028f8467662f02c84b26c50b894f273816c51cf0cb8694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e5f363e5a5d682a1028f8467662f02c84b26c50b894f273816c51cf0cb8694->enter($__internal_11e5f363e5a5d682a1028f8467662f02c84b26c50b894f273816c51cf0cb8694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_11e5f363e5a5d682a1028f8467662f02c84b26c50b894f273816c51cf0cb8694->leave($__internal_11e5f363e5a5d682a1028f8467662f02c84b26c50b894f273816c51cf0cb8694_prof);

        
        $__internal_426f5a2c39fadb263d1f3e3e8d28eb567b4ee5e6246a8408030e47861218abf2->leave($__internal_426f5a2c39fadb263d1f3e3e8d28eb567b4ee5e6246a8408030e47861218abf2_prof);

    }

    // line 123
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_6eccb52058a01293881ba6d5012b6e67715580f2034b280e50b6533a3b003d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eccb52058a01293881ba6d5012b6e67715580f2034b280e50b6533a3b003d2a->enter($__internal_6eccb52058a01293881ba6d5012b6e67715580f2034b280e50b6533a3b003d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_9058a2af5c9a8e053cdb6ae7fb69ad752b5f5e86b4b956f5c88d4a0912dc1e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9058a2af5c9a8e053cdb6ae7fb69ad752b5f5e86b4b956f5c88d4a0912dc1e61->enter($__internal_9058a2af5c9a8e053cdb6ae7fb69ad752b5f5e86b4b956f5c88d4a0912dc1e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 125
        echo "        <textarea oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        
        $__internal_9058a2af5c9a8e053cdb6ae7fb69ad752b5f5e86b4b956f5c88d4a0912dc1e61->leave($__internal_9058a2af5c9a8e053cdb6ae7fb69ad752b5f5e86b4b956f5c88d4a0912dc1e61_prof);

        
        $__internal_6eccb52058a01293881ba6d5012b6e67715580f2034b280e50b6533a3b003d2a->leave($__internal_6eccb52058a01293881ba6d5012b6e67715580f2034b280e50b6533a3b003d2a_prof);

    }

    // line 129
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_14d43ebd283e247b2d16b863d6c8ec2e010bef513c0f0d8c906707363ed7df3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d43ebd283e247b2d16b863d6c8ec2e010bef513c0f0d8c906707363ed7df3e->enter($__internal_14d43ebd283e247b2d16b863d6c8ec2e010bef513c0f0d8c906707363ed7df3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_d18a35857361eb8a0a5a6a1ec6b2086cfd9f94e8489c271f958fb72ca740948a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18a35857361eb8a0a5a6a1ec6b2086cfd9f94e8489c271f958fb72ca740948a->enter($__internal_d18a35857361eb8a0a5a6a1ec6b2086cfd9f94e8489c271f958fb72ca740948a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_d18a35857361eb8a0a5a6a1ec6b2086cfd9f94e8489c271f958fb72ca740948a->leave($__internal_d18a35857361eb8a0a5a6a1ec6b2086cfd9f94e8489c271f958fb72ca740948a_prof);

        
        $__internal_14d43ebd283e247b2d16b863d6c8ec2e010bef513c0f0d8c906707363ed7df3e->leave($__internal_14d43ebd283e247b2d16b863d6c8ec2e010bef513c0f0d8c906707363ed7df3e_prof);

    }

    public function getTemplateName()
    {
        return ":form:custom_fields.html.twig";
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
{%- endblock choice_widget_expanded -%}", ":form:custom_fields.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app/Resources\\views/form/custom_fields.html.twig");
    }
}
