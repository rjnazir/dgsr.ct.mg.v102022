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
        $__internal_de8c50f80abe63787a5c70e446c48e1504ada687e71e3e17d0260eda14113dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8c50f80abe63787a5c70e446c48e1504ada687e71e3e17d0260eda14113dc4->enter($__internal_de8c50f80abe63787a5c70e446c48e1504ada687e71e3e17d0260eda14113dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/custom_fields.html.twig"));

        $__internal_bd2d2374acb936a41d6c49606316ba3b66e8e93db3a4da0772738fbd971dd551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2d2374acb936a41d6c49606316ba3b66e8e93db3a4da0772738fbd971dd551->enter($__internal_bd2d2374acb936a41d6c49606316ba3b66e8e93db3a4da0772738fbd971dd551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/custom_fields.html.twig"));

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
        
        $__internal_de8c50f80abe63787a5c70e446c48e1504ada687e71e3e17d0260eda14113dc4->leave($__internal_de8c50f80abe63787a5c70e446c48e1504ada687e71e3e17d0260eda14113dc4_prof);

        
        $__internal_bd2d2374acb936a41d6c49606316ba3b66e8e93db3a4da0772738fbd971dd551->leave($__internal_bd2d2374acb936a41d6c49606316ba3b66e8e93db3a4da0772738fbd971dd551_prof);

    }

    // line 1
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_e627fe450bf3e72a1b3c0291370c2810ce57073a2045eb20fb0882f617735334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e627fe450bf3e72a1b3c0291370c2810ce57073a2045eb20fb0882f617735334->enter($__internal_e627fe450bf3e72a1b3c0291370c2810ce57073a2045eb20fb0882f617735334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c52ea3dda6456f5bb38cceff6227bd82021b248367bcfa67240e1734cb93ad52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52ea3dda6456f5bb38cceff6227bd82021b248367bcfa67240e1734cb93ad52->enter($__internal_c52ea3dda6456f5bb38cceff6227bd82021b248367bcfa67240e1734cb93ad52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_c52ea3dda6456f5bb38cceff6227bd82021b248367bcfa67240e1734cb93ad52->leave($__internal_c52ea3dda6456f5bb38cceff6227bd82021b248367bcfa67240e1734cb93ad52_prof);

        
        $__internal_e627fe450bf3e72a1b3c0291370c2810ce57073a2045eb20fb0882f617735334->leave($__internal_e627fe450bf3e72a1b3c0291370c2810ce57073a2045eb20fb0882f617735334_prof);

    }

    // line 13
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_ffb3a1d0ffc986076ed8e1c1a3fb84a9b7fb83daba5a1cf9efa02f563061e18f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb3a1d0ffc986076ed8e1c1a3fb84a9b7fb83daba5a1cf9efa02f563061e18f->enter($__internal_ffb3a1d0ffc986076ed8e1c1a3fb84a9b7fb83daba5a1cf9efa02f563061e18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_6c8723aa531b6d3474e64bd60e9300fd175bef408de91fa11c0d965847933f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8723aa531b6d3474e64bd60e9300fd175bef408de91fa11c0d965847933f0b->enter($__internal_6c8723aa531b6d3474e64bd60e9300fd175bef408de91fa11c0d965847933f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_6c8723aa531b6d3474e64bd60e9300fd175bef408de91fa11c0d965847933f0b->leave($__internal_6c8723aa531b6d3474e64bd60e9300fd175bef408de91fa11c0d965847933f0b_prof);

        
        $__internal_ffb3a1d0ffc986076ed8e1c1a3fb84a9b7fb83daba5a1cf9efa02f563061e18f->leave($__internal_ffb3a1d0ffc986076ed8e1c1a3fb84a9b7fb83daba5a1cf9efa02f563061e18f_prof);

    }

    // line 23
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_7a011fa302a2dd0ff409f0639d2dbcaf69fb2de2aa58ea886f7cc121648e5385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a011fa302a2dd0ff409f0639d2dbcaf69fb2de2aa58ea886f7cc121648e5385->enter($__internal_7a011fa302a2dd0ff409f0639d2dbcaf69fb2de2aa58ea886f7cc121648e5385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_7fd64ad2b6df145da7eb622dff5747ccc68c312865b43e51e5a92419cad9dfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd64ad2b6df145da7eb622dff5747ccc68c312865b43e51e5a92419cad9dfdc->enter($__internal_7fd64ad2b6df145da7eb622dff5747ccc68c312865b43e51e5a92419cad9dfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_7fd64ad2b6df145da7eb622dff5747ccc68c312865b43e51e5a92419cad9dfdc->leave($__internal_7fd64ad2b6df145da7eb622dff5747ccc68c312865b43e51e5a92419cad9dfdc_prof);

        
        $__internal_7a011fa302a2dd0ff409f0639d2dbcaf69fb2de2aa58ea886f7cc121648e5385->leave($__internal_7a011fa302a2dd0ff409f0639d2dbcaf69fb2de2aa58ea886f7cc121648e5385_prof);

    }

    // line 35
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3feb3236574c9ba5c74eb866ba93d75da806cbfa4f58a39250aca9fa4ce4b30b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3feb3236574c9ba5c74eb866ba93d75da806cbfa4f58a39250aca9fa4ce4b30b->enter($__internal_3feb3236574c9ba5c74eb866ba93d75da806cbfa4f58a39250aca9fa4ce4b30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_541a325c7572e2e720676c5080c4a4a642a1aa6fb24729534fb3813bb02f1055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541a325c7572e2e720676c5080c4a4a642a1aa6fb24729534fb3813bb02f1055->enter($__internal_541a325c7572e2e720676c5080c4a4a642a1aa6fb24729534fb3813bb02f1055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_541a325c7572e2e720676c5080c4a4a642a1aa6fb24729534fb3813bb02f1055->leave($__internal_541a325c7572e2e720676c5080c4a4a642a1aa6fb24729534fb3813bb02f1055_prof);

        
        $__internal_3feb3236574c9ba5c74eb866ba93d75da806cbfa4f58a39250aca9fa4ce4b30b->leave($__internal_3feb3236574c9ba5c74eb866ba93d75da806cbfa4f58a39250aca9fa4ce4b30b_prof);

    }

    // line 64
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_6c657fe64e0feac12ab2fbcd9c49686fcd67117e6872a2f948a0a7a0d446f960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c657fe64e0feac12ab2fbcd9c49686fcd67117e6872a2f948a0a7a0d446f960->enter($__internal_6c657fe64e0feac12ab2fbcd9c49686fcd67117e6872a2f948a0a7a0d446f960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_4b5909dac5eb32d0a2fc8daaf2e6ee48cfae90957264c8366bfb0dc8eb967b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5909dac5eb32d0a2fc8daaf2e6ee48cfae90957264c8366bfb0dc8eb967b23->enter($__internal_4b5909dac5eb32d0a2fc8daaf2e6ee48cfae90957264c8366bfb0dc8eb967b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 66
        echo "    <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
";
        
        $__internal_4b5909dac5eb32d0a2fc8daaf2e6ee48cfae90957264c8366bfb0dc8eb967b23->leave($__internal_4b5909dac5eb32d0a2fc8daaf2e6ee48cfae90957264c8366bfb0dc8eb967b23_prof);

        
        $__internal_6c657fe64e0feac12ab2fbcd9c49686fcd67117e6872a2f948a0a7a0d446f960->leave($__internal_6c657fe64e0feac12ab2fbcd9c49686fcd67117e6872a2f948a0a7a0d446f960_prof);

    }

    // line 70
    public function block_text_widget($context, array $blocks = array())
    {
        $__internal_91ef22a43fdbb7cc52180d0be712cb93520e95706523a1f7b035de67b3f73e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ef22a43fdbb7cc52180d0be712cb93520e95706523a1f7b035de67b3f73e29->enter($__internal_91ef22a43fdbb7cc52180d0be712cb93520e95706523a1f7b035de67b3f73e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_d7b0384df1fcee4a092c1b91c93954431c1e1419dcff62103e671ef87309b412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b0384df1fcee4a092c1b91c93954431c1e1419dcff62103e671ef87309b412->enter($__internal_d7b0384df1fcee4a092c1b91c93954431c1e1419dcff62103e671ef87309b412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        // line 72
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\" />
";
        
        $__internal_d7b0384df1fcee4a092c1b91c93954431c1e1419dcff62103e671ef87309b412->leave($__internal_d7b0384df1fcee4a092c1b91c93954431c1e1419dcff62103e671ef87309b412_prof);

        
        $__internal_91ef22a43fdbb7cc52180d0be712cb93520e95706523a1f7b035de67b3f73e29->leave($__internal_91ef22a43fdbb7cc52180d0be712cb93520e95706523a1f7b035de67b3f73e29_prof);

    }

    // line 76
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_08c161b0ce3a1b98328d430c28b8426575fb1a967aaad366acd8c9f35cb0b339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c161b0ce3a1b98328d430c28b8426575fb1a967aaad366acd8c9f35cb0b339->enter($__internal_08c161b0ce3a1b98328d430c28b8426575fb1a967aaad366acd8c9f35cb0b339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_3ef7afde692108d2dd97e6fb3fb070d12908dba26aa60130e8a4eedac71eaaa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef7afde692108d2dd97e6fb3fb070d12908dba26aa60130e8a4eedac71eaaa7->enter($__internal_3ef7afde692108d2dd97e6fb3fb070d12908dba26aa60130e8a4eedac71eaaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 78
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\"/>
";
        
        $__internal_3ef7afde692108d2dd97e6fb3fb070d12908dba26aa60130e8a4eedac71eaaa7->leave($__internal_3ef7afde692108d2dd97e6fb3fb070d12908dba26aa60130e8a4eedac71eaaa7_prof);

        
        $__internal_08c161b0ce3a1b98328d430c28b8426575fb1a967aaad366acd8c9f35cb0b339->leave($__internal_08c161b0ce3a1b98328d430c28b8426575fb1a967aaad366acd8c9f35cb0b339_prof);

    }

    // line 82
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_99a199f39bb3eebc7ad47f9584ae3d8aca10514d8d568c253799976b9ba5937c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a199f39bb3eebc7ad47f9584ae3d8aca10514d8d568c253799976b9ba5937c->enter($__internal_99a199f39bb3eebc7ad47f9584ae3d8aca10514d8d568c253799976b9ba5937c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_592a7625eb62ed69b550c5d514f206d130f6be92289bbacac504009c154ab673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592a7625eb62ed69b550c5d514f206d130f6be92289bbacac504009c154ab673->enter($__internal_592a7625eb62ed69b550c5d514f206d130f6be92289bbacac504009c154ab673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_592a7625eb62ed69b550c5d514f206d130f6be92289bbacac504009c154ab673->leave($__internal_592a7625eb62ed69b550c5d514f206d130f6be92289bbacac504009c154ab673_prof);

        
        $__internal_99a199f39bb3eebc7ad47f9584ae3d8aca10514d8d568c253799976b9ba5937c->leave($__internal_99a199f39bb3eebc7ad47f9584ae3d8aca10514d8d568c253799976b9ba5937c_prof);

    }

    // line 88
    public function block_field_widget($context, array $blocks = array())
    {
        $__internal_9ad6a31df6d59e11efd368e3fa70896849afb72fe82554d4c09403971c9cec14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ad6a31df6d59e11efd368e3fa70896849afb72fe82554d4c09403971c9cec14->enter($__internal_9ad6a31df6d59e11efd368e3fa70896849afb72fe82554d4c09403971c9cec14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        $__internal_104bca9e55a8bd71c8f3f472f1431d0e17eab9966daa639729182945e4f5fcc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104bca9e55a8bd71c8f3f472f1431d0e17eab9966daa639729182945e4f5fcc7->enter($__internal_104bca9e55a8bd71c8f3f472f1431d0e17eab9966daa639729182945e4f5fcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

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
        
        $__internal_104bca9e55a8bd71c8f3f472f1431d0e17eab9966daa639729182945e4f5fcc7->leave($__internal_104bca9e55a8bd71c8f3f472f1431d0e17eab9966daa639729182945e4f5fcc7_prof);

        
        $__internal_9ad6a31df6d59e11efd368e3fa70896849afb72fe82554d4c09403971c9cec14->leave($__internal_9ad6a31df6d59e11efd368e3fa70896849afb72fe82554d4c09403971c9cec14_prof);

    }

    // line 94
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_41715acfebb9789af61daca05b4ce4f359d647b4e87a7ffe4f0177d6fe8da018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41715acfebb9789af61daca05b4ce4f359d647b4e87a7ffe4f0177d6fe8da018->enter($__internal_41715acfebb9789af61daca05b4ce4f359d647b4e87a7ffe4f0177d6fe8da018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_49d4de9673089226c3b9f5e1e62d3b1879209d25d9818c526704970ae4359e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d4de9673089226c3b9f5e1e62d3b1879209d25d9818c526704970ae4359e4a->enter($__internal_49d4de9673089226c3b9f5e1e62d3b1879209d25d9818c526704970ae4359e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

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
        
        $__internal_49d4de9673089226c3b9f5e1e62d3b1879209d25d9818c526704970ae4359e4a->leave($__internal_49d4de9673089226c3b9f5e1e62d3b1879209d25d9818c526704970ae4359e4a_prof);

        
        $__internal_41715acfebb9789af61daca05b4ce4f359d647b4e87a7ffe4f0177d6fe8da018->leave($__internal_41715acfebb9789af61daca05b4ce4f359d647b4e87a7ffe4f0177d6fe8da018_prof);

    }

    // line 101
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_71646e39fbe58319dacb7db18ba7dc1cf56b78a4285ec33599097221bc8da916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71646e39fbe58319dacb7db18ba7dc1cf56b78a4285ec33599097221bc8da916->enter($__internal_71646e39fbe58319dacb7db18ba7dc1cf56b78a4285ec33599097221bc8da916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_02e8deac3c4f2a6f62725eb92f46c6bb398140894f08208d78ebb602931ecade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e8deac3c4f2a6f62725eb92f46c6bb398140894f08208d78ebb602931ecade->enter($__internal_02e8deac3c4f2a6f62725eb92f46c6bb398140894f08208d78ebb602931ecade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_02e8deac3c4f2a6f62725eb92f46c6bb398140894f08208d78ebb602931ecade->leave($__internal_02e8deac3c4f2a6f62725eb92f46c6bb398140894f08208d78ebb602931ecade_prof);

        
        $__internal_71646e39fbe58319dacb7db18ba7dc1cf56b78a4285ec33599097221bc8da916->leave($__internal_71646e39fbe58319dacb7db18ba7dc1cf56b78a4285ec33599097221bc8da916_prof);

    }

    // line 123
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_770a7e31db487aa31d030818e88e146357732a0de34f93617133398aa4fe6327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770a7e31db487aa31d030818e88e146357732a0de34f93617133398aa4fe6327->enter($__internal_770a7e31db487aa31d030818e88e146357732a0de34f93617133398aa4fe6327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_ca3a0ab1c3c8a22add4083c1262902f08d6745f23c82061393ed4c60346bea56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3a0ab1c3c8a22add4083c1262902f08d6745f23c82061393ed4c60346bea56->enter($__internal_ca3a0ab1c3c8a22add4083c1262902f08d6745f23c82061393ed4c60346bea56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 125
        echo "        <textarea oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        
        $__internal_ca3a0ab1c3c8a22add4083c1262902f08d6745f23c82061393ed4c60346bea56->leave($__internal_ca3a0ab1c3c8a22add4083c1262902f08d6745f23c82061393ed4c60346bea56_prof);

        
        $__internal_770a7e31db487aa31d030818e88e146357732a0de34f93617133398aa4fe6327->leave($__internal_770a7e31db487aa31d030818e88e146357732a0de34f93617133398aa4fe6327_prof);

    }

    // line 129
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_75eab3512398756cff478e690270f2703071444ddc151851e18b7b2022194113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75eab3512398756cff478e690270f2703071444ddc151851e18b7b2022194113->enter($__internal_75eab3512398756cff478e690270f2703071444ddc151851e18b7b2022194113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_38681c927430fd8b80e57c12b54765bd240b39f43edea88ebe027022b2d52279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38681c927430fd8b80e57c12b54765bd240b39f43edea88ebe027022b2d52279->enter($__internal_38681c927430fd8b80e57c12b54765bd240b39f43edea88ebe027022b2d52279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_38681c927430fd8b80e57c12b54765bd240b39f43edea88ebe027022b2d52279->leave($__internal_38681c927430fd8b80e57c12b54765bd240b39f43edea88ebe027022b2d52279_prof);

        
        $__internal_75eab3512398756cff478e690270f2703071444ddc151851e18b7b2022194113->leave($__internal_75eab3512398756cff478e690270f2703071444ddc151851e18b7b2022194113_prof);

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
