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
        $__internal_f504d01db2e539920f3fa691fc35ca795d09f7450d7778265179f9025563cf2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f504d01db2e539920f3fa691fc35ca795d09f7450d7778265179f9025563cf2c->enter($__internal_f504d01db2e539920f3fa691fc35ca795d09f7450d7778265179f9025563cf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:fields.html.twig"));

        $__internal_6759d122e53fa4c03e7d85b7a87cfa3ca224dcc275ffb9832d30a6fae26a31c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6759d122e53fa4c03e7d85b7a87cfa3ca224dcc275ffb9832d30a6fae26a31c0->enter($__internal_6759d122e53fa4c03e7d85b7a87cfa3ca224dcc275ffb9832d30a6fae26a31c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:fields.html.twig"));

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
        
        $__internal_f504d01db2e539920f3fa691fc35ca795d09f7450d7778265179f9025563cf2c->leave($__internal_f504d01db2e539920f3fa691fc35ca795d09f7450d7778265179f9025563cf2c_prof);

        
        $__internal_6759d122e53fa4c03e7d85b7a87cfa3ca224dcc275ffb9832d30a6fae26a31c0->leave($__internal_6759d122e53fa4c03e7d85b7a87cfa3ca224dcc275ffb9832d30a6fae26a31c0_prof);

    }

    // line 1
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_c7a79c1a98ddc680c4e9e214a32c25d58a30ef864b35f6e4c29a27cd0163c9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a79c1a98ddc680c4e9e214a32c25d58a30ef864b35f6e4c29a27cd0163c9bf->enter($__internal_c7a79c1a98ddc680c4e9e214a32c25d58a30ef864b35f6e4c29a27cd0163c9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_1a5cc2f2c3f6f48b2a5872a69741832f22720e9000b45caaf834c14fc0044bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5cc2f2c3f6f48b2a5872a69741832f22720e9000b45caaf834c14fc0044bf2->enter($__internal_1a5cc2f2c3f6f48b2a5872a69741832f22720e9000b45caaf834c14fc0044bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_1a5cc2f2c3f6f48b2a5872a69741832f22720e9000b45caaf834c14fc0044bf2->leave($__internal_1a5cc2f2c3f6f48b2a5872a69741832f22720e9000b45caaf834c14fc0044bf2_prof);

        
        $__internal_c7a79c1a98ddc680c4e9e214a32c25d58a30ef864b35f6e4c29a27cd0163c9bf->leave($__internal_c7a79c1a98ddc680c4e9e214a32c25d58a30ef864b35f6e4c29a27cd0163c9bf_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_162900a37feec834eaa6f03a70817bbb3ea65a3b3e91fc0d6567da4fb7394b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162900a37feec834eaa6f03a70817bbb3ea65a3b3e91fc0d6567da4fb7394b3d->enter($__internal_162900a37feec834eaa6f03a70817bbb3ea65a3b3e91fc0d6567da4fb7394b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_9ce8dcdd705d8f6c8e25850b592fc16b04c9fca210a6b4f9a53c0c0158b281c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce8dcdd705d8f6c8e25850b592fc16b04c9fca210a6b4f9a53c0c0158b281c4->enter($__internal_9ce8dcdd705d8f6c8e25850b592fc16b04c9fca210a6b4f9a53c0c0158b281c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_9ce8dcdd705d8f6c8e25850b592fc16b04c9fca210a6b4f9a53c0c0158b281c4->leave($__internal_9ce8dcdd705d8f6c8e25850b592fc16b04c9fca210a6b4f9a53c0c0158b281c4_prof);

        
        $__internal_162900a37feec834eaa6f03a70817bbb3ea65a3b3e91fc0d6567da4fb7394b3d->leave($__internal_162900a37feec834eaa6f03a70817bbb3ea65a3b3e91fc0d6567da4fb7394b3d_prof);

    }

    // line 26
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e1a2a6ae12d9da995ade9afa3e0005819bbe816834f47994e1aaf1113883fc9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1a2a6ae12d9da995ade9afa3e0005819bbe816834f47994e1aaf1113883fc9d->enter($__internal_e1a2a6ae12d9da995ade9afa3e0005819bbe816834f47994e1aaf1113883fc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_51f7231e5b4a56cd61a791957979b0f3830c50170c12fd9f2c075323f7b24adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f7231e5b4a56cd61a791957979b0f3830c50170c12fd9f2c075323f7b24adf->enter($__internal_51f7231e5b4a56cd61a791957979b0f3830c50170c12fd9f2c075323f7b24adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_51f7231e5b4a56cd61a791957979b0f3830c50170c12fd9f2c075323f7b24adf->leave($__internal_51f7231e5b4a56cd61a791957979b0f3830c50170c12fd9f2c075323f7b24adf_prof);

        
        $__internal_e1a2a6ae12d9da995ade9afa3e0005819bbe816834f47994e1aaf1113883fc9d->leave($__internal_e1a2a6ae12d9da995ade9afa3e0005819bbe816834f47994e1aaf1113883fc9d_prof);

    }

    // line 48
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_02d899bb34df538267b535e707452a4acf00aa5b723b3a3afeec999d748df3e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d899bb34df538267b535e707452a4acf00aa5b723b3a3afeec999d748df3e6->enter($__internal_02d899bb34df538267b535e707452a4acf00aa5b723b3a3afeec999d748df3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_b91144f37c4a1088452cafd9de68deaea52dc42d68ccb41b737aefa782c84434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91144f37c4a1088452cafd9de68deaea52dc42d68ccb41b737aefa782c84434->enter($__internal_b91144f37c4a1088452cafd9de68deaea52dc42d68ccb41b737aefa782c84434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 50
        echo "            <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
";
        
        $__internal_b91144f37c4a1088452cafd9de68deaea52dc42d68ccb41b737aefa782c84434->leave($__internal_b91144f37c4a1088452cafd9de68deaea52dc42d68ccb41b737aefa782c84434_prof);

        
        $__internal_02d899bb34df538267b535e707452a4acf00aa5b723b3a3afeec999d748df3e6->leave($__internal_02d899bb34df538267b535e707452a4acf00aa5b723b3a3afeec999d748df3e6_prof);

    }

    // line 55
    public function block_text_widget($context, array $blocks = array())
    {
        $__internal_c1347565e13e112702efcb90e1c751d8d4efdee1c2eb7b5a9ebcee4ff59bc386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1347565e13e112702efcb90e1c751d8d4efdee1c2eb7b5a9ebcee4ff59bc386->enter($__internal_c1347565e13e112702efcb90e1c751d8d4efdee1c2eb7b5a9ebcee4ff59bc386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_dcc7444531bb737f5d28048d0e0137340971304f729972eb5715cf31c8eb7729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc7444531bb737f5d28048d0e0137340971304f729972eb5715cf31c8eb7729->enter($__internal_dcc7444531bb737f5d28048d0e0137340971304f729972eb5715cf31c8eb7729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        // line 57
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\" />
";
        
        $__internal_dcc7444531bb737f5d28048d0e0137340971304f729972eb5715cf31c8eb7729->leave($__internal_dcc7444531bb737f5d28048d0e0137340971304f729972eb5715cf31c8eb7729_prof);

        
        $__internal_c1347565e13e112702efcb90e1c751d8d4efdee1c2eb7b5a9ebcee4ff59bc386->leave($__internal_c1347565e13e112702efcb90e1c751d8d4efdee1c2eb7b5a9ebcee4ff59bc386_prof);

    }

    // line 60
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_7abcba1b5f7c5b8fad78760ca8ad91cbd389d071ae7466c95ab5191bdf4aba3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7abcba1b5f7c5b8fad78760ca8ad91cbd389d071ae7466c95ab5191bdf4aba3c->enter($__internal_7abcba1b5f7c5b8fad78760ca8ad91cbd389d071ae7466c95ab5191bdf4aba3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_2621e3af64789223f42e74927340a2c7bb97e08d8b9da8edbe9edc784b4f8c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2621e3af64789223f42e74927340a2c7bb97e08d8b9da8edbe9edc784b4f8c3a->enter($__internal_2621e3af64789223f42e74927340a2c7bb97e08d8b9da8edbe9edc784b4f8c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 62
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\"/>
";
        
        $__internal_2621e3af64789223f42e74927340a2c7bb97e08d8b9da8edbe9edc784b4f8c3a->leave($__internal_2621e3af64789223f42e74927340a2c7bb97e08d8b9da8edbe9edc784b4f8c3a_prof);

        
        $__internal_7abcba1b5f7c5b8fad78760ca8ad91cbd389d071ae7466c95ab5191bdf4aba3c->leave($__internal_7abcba1b5f7c5b8fad78760ca8ad91cbd389d071ae7466c95ab5191bdf4aba3c_prof);

    }

    // line 66
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8563eafab6be1510d37741795d9be4e69ece2331294bffd7834bde070acd6bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8563eafab6be1510d37741795d9be4e69ece2331294bffd7834bde070acd6bee->enter($__internal_8563eafab6be1510d37741795d9be4e69ece2331294bffd7834bde070acd6bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6709fc1e5ec4ee8215d3c2704bdfd7b405a0d92c7a6b1e84803d4485ed8eb182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6709fc1e5ec4ee8215d3c2704bdfd7b405a0d92c7a6b1e84803d4485ed8eb182->enter($__internal_6709fc1e5ec4ee8215d3c2704bdfd7b405a0d92c7a6b1e84803d4485ed8eb182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_6709fc1e5ec4ee8215d3c2704bdfd7b405a0d92c7a6b1e84803d4485ed8eb182->leave($__internal_6709fc1e5ec4ee8215d3c2704bdfd7b405a0d92c7a6b1e84803d4485ed8eb182_prof);

        
        $__internal_8563eafab6be1510d37741795d9be4e69ece2331294bffd7834bde070acd6bee->leave($__internal_8563eafab6be1510d37741795d9be4e69ece2331294bffd7834bde070acd6bee_prof);

    }

    // line 72
    public function block_field_widget($context, array $blocks = array())
    {
        $__internal_e36ebfd47bedd0f1ab667bfb8e023a68c50bff51613d703bc72d176668b80efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e36ebfd47bedd0f1ab667bfb8e023a68c50bff51613d703bc72d176668b80efb->enter($__internal_e36ebfd47bedd0f1ab667bfb8e023a68c50bff51613d703bc72d176668b80efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        $__internal_92d0fc320c40858bcad1de4707c0c31047f60b5e927cad11f839f82e7be6438e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d0fc320c40858bcad1de4707c0c31047f60b5e927cad11f839f82e7be6438e->enter($__internal_92d0fc320c40858bcad1de4707c0c31047f60b5e927cad11f839f82e7be6438e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

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
        
        $__internal_92d0fc320c40858bcad1de4707c0c31047f60b5e927cad11f839f82e7be6438e->leave($__internal_92d0fc320c40858bcad1de4707c0c31047f60b5e927cad11f839f82e7be6438e_prof);

        
        $__internal_e36ebfd47bedd0f1ab667bfb8e023a68c50bff51613d703bc72d176668b80efb->leave($__internal_e36ebfd47bedd0f1ab667bfb8e023a68c50bff51613d703bc72d176668b80efb_prof);

    }

    // line 78
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_c039b1dfc204bb4ef8a627f905204a46d2eca9b54d662e8d99905440761684bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c039b1dfc204bb4ef8a627f905204a46d2eca9b54d662e8d99905440761684bf->enter($__internal_c039b1dfc204bb4ef8a627f905204a46d2eca9b54d662e8d99905440761684bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_8dd98b27709bfd03bc7fc0f076d20267ef99fa7a265fe76a80a057b76fdf17cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd98b27709bfd03bc7fc0f076d20267ef99fa7a265fe76a80a057b76fdf17cb->enter($__internal_8dd98b27709bfd03bc7fc0f076d20267ef99fa7a265fe76a80a057b76fdf17cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

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
        
        $__internal_8dd98b27709bfd03bc7fc0f076d20267ef99fa7a265fe76a80a057b76fdf17cb->leave($__internal_8dd98b27709bfd03bc7fc0f076d20267ef99fa7a265fe76a80a057b76fdf17cb_prof);

        
        $__internal_c039b1dfc204bb4ef8a627f905204a46d2eca9b54d662e8d99905440761684bf->leave($__internal_c039b1dfc204bb4ef8a627f905204a46d2eca9b54d662e8d99905440761684bf_prof);

    }

    // line 86
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_62e64aad56ddb50c6ba13ca59317a9cd704f83bcd150925374522ca4c23be01b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e64aad56ddb50c6ba13ca59317a9cd704f83bcd150925374522ca4c23be01b->enter($__internal_62e64aad56ddb50c6ba13ca59317a9cd704f83bcd150925374522ca4c23be01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d2fdff535e10405581072640fe4571824c7bf7857666a7d8aed8e0685b25f196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fdff535e10405581072640fe4571824c7bf7857666a7d8aed8e0685b25f196->enter($__internal_d2fdff535e10405581072640fe4571824c7bf7857666a7d8aed8e0685b25f196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_d2fdff535e10405581072640fe4571824c7bf7857666a7d8aed8e0685b25f196->leave($__internal_d2fdff535e10405581072640fe4571824c7bf7857666a7d8aed8e0685b25f196_prof);

        
        $__internal_62e64aad56ddb50c6ba13ca59317a9cd704f83bcd150925374522ca4c23be01b->leave($__internal_62e64aad56ddb50c6ba13ca59317a9cd704f83bcd150925374522ca4c23be01b_prof);

    }

    // line 108
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_a1b08c5b30a94d1a87254d22d4fef3d9396c2630c876642c6d14eecb1fb75763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b08c5b30a94d1a87254d22d4fef3d9396c2630c876642c6d14eecb1fb75763->enter($__internal_a1b08c5b30a94d1a87254d22d4fef3d9396c2630c876642c6d14eecb1fb75763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6583a7cf0a078469c8d509314be432011d7051a1530e0ee261c9d64f534a9761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6583a7cf0a078469c8d509314be432011d7051a1530e0ee261c9d64f534a9761->enter($__internal_6583a7cf0a078469c8d509314be432011d7051a1530e0ee261c9d64f534a9761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 110
        echo "        <textarea oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        
        $__internal_6583a7cf0a078469c8d509314be432011d7051a1530e0ee261c9d64f534a9761->leave($__internal_6583a7cf0a078469c8d509314be432011d7051a1530e0ee261c9d64f534a9761_prof);

        
        $__internal_a1b08c5b30a94d1a87254d22d4fef3d9396c2630c876642c6d14eecb1fb75763->leave($__internal_a1b08c5b30a94d1a87254d22d4fef3d9396c2630c876642c6d14eecb1fb75763_prof);

    }

    // line 115
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_03ea56a8bf724dc9f5553b4fd0ea196c2ba1e49102d85a3396d00407b211bc0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ea56a8bf724dc9f5553b4fd0ea196c2ba1e49102d85a3396d00407b211bc0b->enter($__internal_03ea56a8bf724dc9f5553b4fd0ea196c2ba1e49102d85a3396d00407b211bc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_705324cd158fa0563609d597129a591a7f5dbdd3bb136edbad6cbd0ccbde893b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705324cd158fa0563609d597129a591a7f5dbdd3bb136edbad6cbd0ccbde893b->enter($__internal_705324cd158fa0563609d597129a591a7f5dbdd3bb136edbad6cbd0ccbde893b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_705324cd158fa0563609d597129a591a7f5dbdd3bb136edbad6cbd0ccbde893b->leave($__internal_705324cd158fa0563609d597129a591a7f5dbdd3bb136edbad6cbd0ccbde893b_prof);

        
        $__internal_03ea56a8bf724dc9f5553b4fd0ea196c2ba1e49102d85a3396d00407b211bc0b->leave($__internal_03ea56a8bf724dc9f5553b4fd0ea196c2ba1e49102d85a3396d00407b211bc0b_prof);

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
