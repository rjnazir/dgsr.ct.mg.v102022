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
        $__internal_bec986dcaafb799b59f60cb9810a713d0a42e34123b6f035fe67a65fbc75042d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec986dcaafb799b59f60cb9810a713d0a42e34123b6f035fe67a65fbc75042d->enter($__internal_bec986dcaafb799b59f60cb9810a713d0a42e34123b6f035fe67a65fbc75042d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:custom_fields.html.twig"));

        $__internal_b8412e07cabc56f7c8ccc628fe512b42b154146a998679be029bdbc35f6efe4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8412e07cabc56f7c8ccc628fe512b42b154146a998679be029bdbc35f6efe4e->enter($__internal_b8412e07cabc56f7c8ccc628fe512b42b154146a998679be029bdbc35f6efe4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:custom_fields.html.twig"));

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
        
        $__internal_bec986dcaafb799b59f60cb9810a713d0a42e34123b6f035fe67a65fbc75042d->leave($__internal_bec986dcaafb799b59f60cb9810a713d0a42e34123b6f035fe67a65fbc75042d_prof);

        
        $__internal_b8412e07cabc56f7c8ccc628fe512b42b154146a998679be029bdbc35f6efe4e->leave($__internal_b8412e07cabc56f7c8ccc628fe512b42b154146a998679be029bdbc35f6efe4e_prof);

    }

    // line 1
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_25a27a973d3e7e08e377fdb9576c7e937ae45ad1516e9728d328a77e3398e14b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a27a973d3e7e08e377fdb9576c7e937ae45ad1516e9728d328a77e3398e14b->enter($__internal_25a27a973d3e7e08e377fdb9576c7e937ae45ad1516e9728d328a77e3398e14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_bc0ba4a5635f044b0878feeeae708a6269c1bf86672c5e93a88b39d257fe96ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0ba4a5635f044b0878feeeae708a6269c1bf86672c5e93a88b39d257fe96ce->enter($__internal_bc0ba4a5635f044b0878feeeae708a6269c1bf86672c5e93a88b39d257fe96ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_bc0ba4a5635f044b0878feeeae708a6269c1bf86672c5e93a88b39d257fe96ce->leave($__internal_bc0ba4a5635f044b0878feeeae708a6269c1bf86672c5e93a88b39d257fe96ce_prof);

        
        $__internal_25a27a973d3e7e08e377fdb9576c7e937ae45ad1516e9728d328a77e3398e14b->leave($__internal_25a27a973d3e7e08e377fdb9576c7e937ae45ad1516e9728d328a77e3398e14b_prof);

    }

    // line 13
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_9d8e69c89338b9cc399e996dd2d8489fc201193ac776c3681d9497bc099d95c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8e69c89338b9cc399e996dd2d8489fc201193ac776c3681d9497bc099d95c7->enter($__internal_9d8e69c89338b9cc399e996dd2d8489fc201193ac776c3681d9497bc099d95c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_fb9b0151e55df72fa8054fec7fb4fbc82dbae418436e3e1b2d44f2cd100eb29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9b0151e55df72fa8054fec7fb4fbc82dbae418436e3e1b2d44f2cd100eb29c->enter($__internal_fb9b0151e55df72fa8054fec7fb4fbc82dbae418436e3e1b2d44f2cd100eb29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_fb9b0151e55df72fa8054fec7fb4fbc82dbae418436e3e1b2d44f2cd100eb29c->leave($__internal_fb9b0151e55df72fa8054fec7fb4fbc82dbae418436e3e1b2d44f2cd100eb29c_prof);

        
        $__internal_9d8e69c89338b9cc399e996dd2d8489fc201193ac776c3681d9497bc099d95c7->leave($__internal_9d8e69c89338b9cc399e996dd2d8489fc201193ac776c3681d9497bc099d95c7_prof);

    }

    // line 23
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_285ff246e8fc1b1e196b750975adbade2c9c79419a446f77b7fb22c2cf103c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285ff246e8fc1b1e196b750975adbade2c9c79419a446f77b7fb22c2cf103c53->enter($__internal_285ff246e8fc1b1e196b750975adbade2c9c79419a446f77b7fb22c2cf103c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_654f4b2d4f37c9c6addf2370e9c19d8a19906b9f5298c23eb285460c015aba9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654f4b2d4f37c9c6addf2370e9c19d8a19906b9f5298c23eb285460c015aba9b->enter($__internal_654f4b2d4f37c9c6addf2370e9c19d8a19906b9f5298c23eb285460c015aba9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_654f4b2d4f37c9c6addf2370e9c19d8a19906b9f5298c23eb285460c015aba9b->leave($__internal_654f4b2d4f37c9c6addf2370e9c19d8a19906b9f5298c23eb285460c015aba9b_prof);

        
        $__internal_285ff246e8fc1b1e196b750975adbade2c9c79419a446f77b7fb22c2cf103c53->leave($__internal_285ff246e8fc1b1e196b750975adbade2c9c79419a446f77b7fb22c2cf103c53_prof);

    }

    // line 35
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_866494308fd3c8718b1d8c89a2a5ae306173689f432bd330118090bf28957213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866494308fd3c8718b1d8c89a2a5ae306173689f432bd330118090bf28957213->enter($__internal_866494308fd3c8718b1d8c89a2a5ae306173689f432bd330118090bf28957213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2cfb990810dc5fd2cbfe8d22f45ad8fb3f0d3ddf8130a6cb8c55538870304b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfb990810dc5fd2cbfe8d22f45ad8fb3f0d3ddf8130a6cb8c55538870304b92->enter($__internal_2cfb990810dc5fd2cbfe8d22f45ad8fb3f0d3ddf8130a6cb8c55538870304b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_2cfb990810dc5fd2cbfe8d22f45ad8fb3f0d3ddf8130a6cb8c55538870304b92->leave($__internal_2cfb990810dc5fd2cbfe8d22f45ad8fb3f0d3ddf8130a6cb8c55538870304b92_prof);

        
        $__internal_866494308fd3c8718b1d8c89a2a5ae306173689f432bd330118090bf28957213->leave($__internal_866494308fd3c8718b1d8c89a2a5ae306173689f432bd330118090bf28957213_prof);

    }

    // line 64
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_107c376a4f125e9fd18ac9829d3c69bd1d1924e24428713ee1a7b7a831b849cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107c376a4f125e9fd18ac9829d3c69bd1d1924e24428713ee1a7b7a831b849cf->enter($__internal_107c376a4f125e9fd18ac9829d3c69bd1d1924e24428713ee1a7b7a831b849cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_fa1d83b2d1d612960529c82adb6ec7cf91c91246b713c717a87b051a88806286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1d83b2d1d612960529c82adb6ec7cf91c91246b713c717a87b051a88806286->enter($__internal_fa1d83b2d1d612960529c82adb6ec7cf91c91246b713c717a87b051a88806286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 66
        echo "    <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
";
        
        $__internal_fa1d83b2d1d612960529c82adb6ec7cf91c91246b713c717a87b051a88806286->leave($__internal_fa1d83b2d1d612960529c82adb6ec7cf91c91246b713c717a87b051a88806286_prof);

        
        $__internal_107c376a4f125e9fd18ac9829d3c69bd1d1924e24428713ee1a7b7a831b849cf->leave($__internal_107c376a4f125e9fd18ac9829d3c69bd1d1924e24428713ee1a7b7a831b849cf_prof);

    }

    // line 70
    public function block_text_widget($context, array $blocks = array())
    {
        $__internal_6c294f22b252ff0c548d889b88e182e7dc8648d46531406020bd019eb87201f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c294f22b252ff0c548d889b88e182e7dc8648d46531406020bd019eb87201f0->enter($__internal_6c294f22b252ff0c548d889b88e182e7dc8648d46531406020bd019eb87201f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_62e30095834a9060e2e893452566eb6ab38501aa97ae41dad6a890efb550688c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e30095834a9060e2e893452566eb6ab38501aa97ae41dad6a890efb550688c->enter($__internal_62e30095834a9060e2e893452566eb6ab38501aa97ae41dad6a890efb550688c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        // line 72
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\" />
";
        
        $__internal_62e30095834a9060e2e893452566eb6ab38501aa97ae41dad6a890efb550688c->leave($__internal_62e30095834a9060e2e893452566eb6ab38501aa97ae41dad6a890efb550688c_prof);

        
        $__internal_6c294f22b252ff0c548d889b88e182e7dc8648d46531406020bd019eb87201f0->leave($__internal_6c294f22b252ff0c548d889b88e182e7dc8648d46531406020bd019eb87201f0_prof);

    }

    // line 76
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_71d6eb1f0f1cb65425c15cceba138a48c67b32b7699ba544d0a56afa74ef7107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d6eb1f0f1cb65425c15cceba138a48c67b32b7699ba544d0a56afa74ef7107->enter($__internal_71d6eb1f0f1cb65425c15cceba138a48c67b32b7699ba544d0a56afa74ef7107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_0bd9d597392337ebd4c89ed303746ce8065c8b8dd1d53c1ab31e0190a6dfef92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd9d597392337ebd4c89ed303746ce8065c8b8dd1d53c1ab31e0190a6dfef92->enter($__internal_0bd9d597392337ebd4c89ed303746ce8065c8b8dd1d53c1ab31e0190a6dfef92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 78
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\"/>
";
        
        $__internal_0bd9d597392337ebd4c89ed303746ce8065c8b8dd1d53c1ab31e0190a6dfef92->leave($__internal_0bd9d597392337ebd4c89ed303746ce8065c8b8dd1d53c1ab31e0190a6dfef92_prof);

        
        $__internal_71d6eb1f0f1cb65425c15cceba138a48c67b32b7699ba544d0a56afa74ef7107->leave($__internal_71d6eb1f0f1cb65425c15cceba138a48c67b32b7699ba544d0a56afa74ef7107_prof);

    }

    // line 82
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8a3307b5a51f1ac658fd1613576d17106f3c3da5af6f8177fcfb5bf7ad40f2bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3307b5a51f1ac658fd1613576d17106f3c3da5af6f8177fcfb5bf7ad40f2bd->enter($__internal_8a3307b5a51f1ac658fd1613576d17106f3c3da5af6f8177fcfb5bf7ad40f2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_111ab07a201f8000eeccac9b964cf0f47382e7e42b112268903cb6115428936d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111ab07a201f8000eeccac9b964cf0f47382e7e42b112268903cb6115428936d->enter($__internal_111ab07a201f8000eeccac9b964cf0f47382e7e42b112268903cb6115428936d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_111ab07a201f8000eeccac9b964cf0f47382e7e42b112268903cb6115428936d->leave($__internal_111ab07a201f8000eeccac9b964cf0f47382e7e42b112268903cb6115428936d_prof);

        
        $__internal_8a3307b5a51f1ac658fd1613576d17106f3c3da5af6f8177fcfb5bf7ad40f2bd->leave($__internal_8a3307b5a51f1ac658fd1613576d17106f3c3da5af6f8177fcfb5bf7ad40f2bd_prof);

    }

    // line 88
    public function block_field_widget($context, array $blocks = array())
    {
        $__internal_da60058c681d112e6a082ddf4a174a011b83ca810612ee223220886a74c956ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da60058c681d112e6a082ddf4a174a011b83ca810612ee223220886a74c956ef->enter($__internal_da60058c681d112e6a082ddf4a174a011b83ca810612ee223220886a74c956ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        $__internal_625df01fd7613075686b25572436517c253876b8f7d8d4012868e43c778b24b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625df01fd7613075686b25572436517c253876b8f7d8d4012868e43c778b24b8->enter($__internal_625df01fd7613075686b25572436517c253876b8f7d8d4012868e43c778b24b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

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
        
        $__internal_625df01fd7613075686b25572436517c253876b8f7d8d4012868e43c778b24b8->leave($__internal_625df01fd7613075686b25572436517c253876b8f7d8d4012868e43c778b24b8_prof);

        
        $__internal_da60058c681d112e6a082ddf4a174a011b83ca810612ee223220886a74c956ef->leave($__internal_da60058c681d112e6a082ddf4a174a011b83ca810612ee223220886a74c956ef_prof);

    }

    // line 94
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_ea55b3235d5b865dd266802b3a3f0560751b021b3d603f719bbbffa9bb00dd41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea55b3235d5b865dd266802b3a3f0560751b021b3d603f719bbbffa9bb00dd41->enter($__internal_ea55b3235d5b865dd266802b3a3f0560751b021b3d603f719bbbffa9bb00dd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_e6d426f2c24e60a10087c7aa941f67de6ba0885879e23f9b5d1cb3b6112cf70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d426f2c24e60a10087c7aa941f67de6ba0885879e23f9b5d1cb3b6112cf70a->enter($__internal_e6d426f2c24e60a10087c7aa941f67de6ba0885879e23f9b5d1cb3b6112cf70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

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
        
        $__internal_e6d426f2c24e60a10087c7aa941f67de6ba0885879e23f9b5d1cb3b6112cf70a->leave($__internal_e6d426f2c24e60a10087c7aa941f67de6ba0885879e23f9b5d1cb3b6112cf70a_prof);

        
        $__internal_ea55b3235d5b865dd266802b3a3f0560751b021b3d603f719bbbffa9bb00dd41->leave($__internal_ea55b3235d5b865dd266802b3a3f0560751b021b3d603f719bbbffa9bb00dd41_prof);

    }

    // line 101
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b011cac90433e76191560b7fc17bbc3af746b09212bcf94cb43dae96848ab5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b011cac90433e76191560b7fc17bbc3af746b09212bcf94cb43dae96848ab5cb->enter($__internal_b011cac90433e76191560b7fc17bbc3af746b09212bcf94cb43dae96848ab5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f02c95101255d2a4ac65a490db3836ca8f01186ed3767d154f3c15f76329d3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02c95101255d2a4ac65a490db3836ca8f01186ed3767d154f3c15f76329d3cc->enter($__internal_f02c95101255d2a4ac65a490db3836ca8f01186ed3767d154f3c15f76329d3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_f02c95101255d2a4ac65a490db3836ca8f01186ed3767d154f3c15f76329d3cc->leave($__internal_f02c95101255d2a4ac65a490db3836ca8f01186ed3767d154f3c15f76329d3cc_prof);

        
        $__internal_b011cac90433e76191560b7fc17bbc3af746b09212bcf94cb43dae96848ab5cb->leave($__internal_b011cac90433e76191560b7fc17bbc3af746b09212bcf94cb43dae96848ab5cb_prof);

    }

    // line 123
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f8e8b969e1d659797dc0e28b61f77cca502feae0e3744d612691d3d9ed7eb506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e8b969e1d659797dc0e28b61f77cca502feae0e3744d612691d3d9ed7eb506->enter($__internal_f8e8b969e1d659797dc0e28b61f77cca502feae0e3744d612691d3d9ed7eb506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_516ce986f584f31e4a22a8e2b55585709cb0fdc42d1bae2d52a110712cf9d00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516ce986f584f31e4a22a8e2b55585709cb0fdc42d1bae2d52a110712cf9d00a->enter($__internal_516ce986f584f31e4a22a8e2b55585709cb0fdc42d1bae2d52a110712cf9d00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 125
        echo "        <textarea oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        
        $__internal_516ce986f584f31e4a22a8e2b55585709cb0fdc42d1bae2d52a110712cf9d00a->leave($__internal_516ce986f584f31e4a22a8e2b55585709cb0fdc42d1bae2d52a110712cf9d00a_prof);

        
        $__internal_f8e8b969e1d659797dc0e28b61f77cca502feae0e3744d612691d3d9ed7eb506->leave($__internal_f8e8b969e1d659797dc0e28b61f77cca502feae0e3744d612691d3d9ed7eb506_prof);

    }

    // line 129
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_793073fb488f73cb17737b7e973a88d3877d639b91666bc6f660adccfe568bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_793073fb488f73cb17737b7e973a88d3877d639b91666bc6f660adccfe568bd7->enter($__internal_793073fb488f73cb17737b7e973a88d3877d639b91666bc6f660adccfe568bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_a1e03eeabda11769d8e525333a683aadcd19003d59f9a5a3e866e00bb04fbef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e03eeabda11769d8e525333a683aadcd19003d59f9a5a3e866e00bb04fbef0->enter($__internal_a1e03eeabda11769d8e525333a683aadcd19003d59f9a5a3e866e00bb04fbef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_a1e03eeabda11769d8e525333a683aadcd19003d59f9a5a3e866e00bb04fbef0->leave($__internal_a1e03eeabda11769d8e525333a683aadcd19003d59f9a5a3e866e00bb04fbef0_prof);

        
        $__internal_793073fb488f73cb17737b7e973a88d3877d639b91666bc6f660adccfe568bd7->leave($__internal_793073fb488f73cb17737b7e973a88d3877d639b91666bc6f660adccfe568bd7_prof);

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
