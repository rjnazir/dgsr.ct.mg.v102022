<?php

/* AdminBundle:CtConstatationAvDedouanement:edit.html.twig */
class __TwigTemplate_312f75a218abf45c15f294f205f274eb36d1b4b6e2722787b08c3edc6f97db81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtConstatationAvDedouanement:edit.html.twig", 1);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2238033c2b558441ae1b0751d130c86d82a30ed45a031f2708a2dff238bc2a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2238033c2b558441ae1b0751d130c86d82a30ed45a031f2708a2dff238bc2a01->enter($__internal_2238033c2b558441ae1b0751d130c86d82a30ed45a031f2708a2dff238bc2a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanement:edit.html.twig"));

        $__internal_d33c636ad8de23b268336a13f9566b1ab7bcef3ed3c535649a2f34c22e5ae9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33c636ad8de23b268336a13f9566b1ab7bcef3ed3c535649a2f34c22e5ae9fd->enter($__internal_d33c636ad8de23b268336a13f9566b1ab7bcef3ed3c535649a2f34c22e5ae9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanement:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVerificateur", array()), array(0 => $this));
        // line 33
        $context["menu_const_av_ded"] = true;
        // line 34
        $context["menu_const_av_ded_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2238033c2b558441ae1b0751d130c86d82a30ed45a031f2708a2dff238bc2a01->leave($__internal_2238033c2b558441ae1b0751d130c86d82a30ed45a031f2708a2dff238bc2a01_prof);

        
        $__internal_d33c636ad8de23b268336a13f9566b1ab7bcef3ed3c535649a2f34c22e5ae9fd->leave($__internal_d33c636ad8de23b268336a13f9566b1ab7bcef3ed3c535649a2f34c22e5ae9fd_prof);

    }

    // line 6
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4dea346e516b6207e5922ccb3848b2c1c35f24234b83d03d1b658470637008aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dea346e516b6207e5922ccb3848b2c1c35f24234b83d03d1b658470637008aa->enter($__internal_4dea346e516b6207e5922ccb3848b2c1c35f24234b83d03d1b658470637008aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_077575dddf3d31abdf2c26da22bf2d557a52648e8dc8bf1e21eb5cfc172e321b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077575dddf3d31abdf2c26da22bf2d557a52648e8dc8bf1e21eb5cfc172e321b->enter($__internal_077575dddf3d31abdf2c26da22bf2d557a52648e8dc8bf1e21eb5cfc172e321b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 7
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 8
            $context["required"] = false;
        }
        // line 10
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 12
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 13
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 14
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 15
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 18
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 19
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 20
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 21
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 22
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 25
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 26
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 27
        echo "</select>
    </span>";
        
        $__internal_077575dddf3d31abdf2c26da22bf2d557a52648e8dc8bf1e21eb5cfc172e321b->leave($__internal_077575dddf3d31abdf2c26da22bf2d557a52648e8dc8bf1e21eb5cfc172e321b_prof);

        
        $__internal_4dea346e516b6207e5922ccb3848b2c1c35f24234b83d03d1b658470637008aa->leave($__internal_4dea346e516b6207e5922ccb3848b2c1c35f24234b83d03d1b658470637008aa_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_16cc9903a746014682abf39f32fd64378c8270508fbfe986998cd01a65364c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16cc9903a746014682abf39f32fd64378c8270508fbfe986998cd01a65364c35->enter($__internal_16cc9903a746014682abf39f32fd64378c8270508fbfe986998cd01a65364c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a214340363a3f84f12e82277c1e0ae3fd8a274d95446d74c5f13b20423ff4d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a214340363a3f84f12e82277c1e0ae3fd8a274d95446d74c5f13b20423ff4d39->enter($__internal_a214340363a3f84f12e82277c1e0ae3fd8a274d95446d74c5f13b20423ff4d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
        
        $__internal_a214340363a3f84f12e82277c1e0ae3fd8a274d95446d74c5f13b20423ff4d39->leave($__internal_a214340363a3f84f12e82277c1e0ae3fd8a274d95446d74c5f13b20423ff4d39_prof);

        
        $__internal_16cc9903a746014682abf39f32fd64378c8270508fbfe986998cd01a65364c35->leave($__internal_16cc9903a746014682abf39f32fd64378c8270508fbfe986998cd01a65364c35_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_f07bf1d06aa917756edf08cb12ba409d9714e0f4b07e1a8fc3ccfc1ea7f3c1af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f07bf1d06aa917756edf08cb12ba409d9714e0f4b07e1a8fc3ccfc1ea7f3c1af->enter($__internal_f07bf1d06aa917756edf08cb12ba409d9714e0f4b07e1a8fc3ccfc1ea7f3c1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d7876ec7cae493c9cbb3d081898ce9149f4f0ab943f9113bbfc210ef5fffcf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7876ec7cae493c9cbb3d081898ce9149f4f0ab943f9113bbfc210ef5fffcf1->enter($__internal_8d7876ec7cae493c9cbb3d081898ce9149f4f0ab943f9113bbfc210ef5fffcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 38
            echo "        <div class=\"callout callout-success\">
            ";
            // line 39
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 43
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 44
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading text-center\"><h3>Caracteristiques du vehicule</h3></div>
        <div class=\"panel-body\">
            ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
            <div class=\"row\">
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctConstAvDedCaracs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cadc"]) {
            // line 55
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctGenre", array()), array(0 => $this));
            // line 56
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctMarque", array()), array(0 => $this));
            // line 57
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctSourceEnergie", array()), array(0 => $this));
            // line 58
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctCarosserie", array()), array(0 => $this));
            // line 59
            echo "                    <div class=\"col-md-6\">
                        <div class=\"box box-success\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    ";
            // line 63
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctConstAvDedType", array()), 'widget', array("attr" => array("class" => "form-control hide")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadInputCaracType", array()), 'widget', array("attr" => array("class" => "form-control kl-select-cadt")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 69
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPremiereCircule", array()), 'label');
            echo "
                                    ";
            // line 70
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPremiereCircule", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 73
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctGenre", array()), 'label');
            echo "
                                    ";
            // line 74
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctGenre", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 77
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctMarque", array()), 'label');
            echo "
                                    ";
            // line 78
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctMarque", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 81
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadTypeCar", array()), 'label');
            echo "
                                    ";
            // line 82
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadTypeCar", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 85
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumSerieType", array()), 'label');
            echo "
                                    ";
            // line 86
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumSerieType", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 89
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumMoteur", array()), 'label');
            echo "
                                    ";
            // line 90
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumMoteur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 93
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctSourceEnergie", array()), 'label');
            echo "
                                    ";
            // line 94
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctSourceEnergie", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 97
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadCylindre", array()), 'label');
            echo "
                                    ";
            // line 98
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadCylindre", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPuissance", array()), 'label');
            echo "
                                    ";
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPuissance", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 105
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctCarosserie", array()), 'label');
            echo "
                                    ";
            // line 106
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctCarosserie", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 109
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNbrAssis", array()), 'label');
            echo "
                                    ";
            // line 110
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNbrAssis", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <hr/>
                                <div class=\"form-group\">
                                    ";
            // line 114
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLargeur", array()), 'label');
            echo "
                                    ";
            // line 115
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLargeur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 118
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadHauteur", array()), 'label');
            echo "
                                    ";
            // line 119
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadHauteur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 122
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLongueur", array()), 'label');
            echo "
                                    ";
            // line 123
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLongueur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <hr/>
                                <div class=\"form-group\">
                                    ";
            // line 127
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadChargeUtile", array()), 'label');
            echo "
                                    ";
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadChargeUtile", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 131
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsVide", array()), 'label');
            echo "
                                    ";
            // line 132
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsVide", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 135
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsTotalCharge", array()), 'label');
            echo "
                                    ";
            // line 136
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsTotalCharge", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 139
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsMaxima", array()), 'label');
            echo "
                                    ";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsMaxima", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cadc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "            </div>
            <div class=\"kl-cav\">
                <div class=\"col-md-12\">
                    ";
        // line 150
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVerificateur", array()), 'row');
        echo "
                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadImmatriculation", array()), 'row');
        echo "
                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadProvenance", array()), 'row');
        echo "
                    ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadDateEmbarquement", array()), 'row');
        echo "
                    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadLieuEmbarquement", array()), 'row');
        echo "
                    ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadProprietaireNom", array()), 'row');
        echo "
                    ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadProprietaireAdresse", array()), 'row');
        echo "
                    ";
        // line 157
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadDivers", array()), 'row');
        echo "
                    ";
        // line 158
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadConforme", array()), 'row');
        echo "
                    ";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadBonEtat", array()), 'row');
        echo "
                    ";
        // line 160
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadSecPers", array()), 'row');
        echo "
                    ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadSecMarch", array()), 'row');
        echo "
                    ";
        // line 162
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadProtecEnv", array()), 'row');
        echo "
                    ";
        // line 164
        echo "                </div>
            </div>
            
            ";
        // line 206
        echo "        </div>
        <div class=\"box-footer\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
            <a href=\"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_index");
        echo "\"
               class=\"btn btn-default pull-left btn-mini-rectif\" >
                Retour à la liste
            </a>
        </div>
        ";
        // line 214
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_8d7876ec7cae493c9cbb3d081898ce9149f4f0ab943f9113bbfc210ef5fffcf1->leave($__internal_8d7876ec7cae493c9cbb3d081898ce9149f4f0ab943f9113bbfc210ef5fffcf1_prof);

        
        $__internal_f07bf1d06aa917756edf08cb12ba409d9714e0f4b07e1a8fc3ccfc1ea7f3c1af->leave($__internal_f07bf1d06aa917756edf08cb12ba409d9714e0f4b07e1a8fc3ccfc1ea7f3c1af_prof);

    }

    // line 218
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_93b2b7c7adb3f1180ff8018a2dc3b50602b4366f8ac2526fcd5486d794ac8aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b2b7c7adb3f1180ff8018a2dc3b50602b4366f8ac2526fcd5486d794ac8aa1->enter($__internal_93b2b7c7adb3f1180ff8018a2dc3b50602b4366f8ac2526fcd5486d794ac8aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8ccc66c801de7fa0c180b74902084c8ef173ce3223299a89cf9865e6b6645f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ccc66c801de7fa0c180b74902084c8ef173ce3223299a89cf9865e6b6645f71->enter($__internal_8ccc66c801de7fa0c180b74902084c8ef173ce3223299a89cf9865e6b6645f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 219
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>

    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/edit.reception.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8ccc66c801de7fa0c180b74902084c8ef173ce3223299a89cf9865e6b6645f71->leave($__internal_8ccc66c801de7fa0c180b74902084c8ef173ce3223299a89cf9865e6b6645f71_prof);

        
        $__internal_93b2b7c7adb3f1180ff8018a2dc3b50602b4366f8ac2526fcd5486d794ac8aa1->leave($__internal_93b2b7c7adb3f1180ff8018a2dc3b50602b4366f8ac2526fcd5486d794ac8aa1_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtConstatationAvDedouanement:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 224,  520 => 222,  513 => 219,  504 => 218,  491 => 214,  483 => 209,  478 => 206,  473 => 164,  469 => 162,  465 => 161,  461 => 160,  457 => 159,  453 => 158,  449 => 157,  445 => 156,  441 => 155,  437 => 154,  433 => 153,  429 => 152,  425 => 151,  420 => 150,  415 => 146,  403 => 140,  399 => 139,  393 => 136,  389 => 135,  383 => 132,  379 => 131,  373 => 128,  369 => 127,  362 => 123,  358 => 122,  352 => 119,  348 => 118,  342 => 115,  338 => 114,  331 => 110,  327 => 109,  321 => 106,  317 => 105,  311 => 102,  307 => 101,  301 => 98,  297 => 97,  291 => 94,  287 => 93,  281 => 90,  277 => 89,  271 => 86,  267 => 85,  261 => 82,  257 => 81,  251 => 78,  247 => 77,  241 => 74,  237 => 73,  231 => 70,  227 => 69,  221 => 66,  215 => 63,  209 => 59,  206 => 58,  203 => 57,  200 => 56,  197 => 55,  193 => 54,  188 => 52,  181 => 47,  172 => 44,  169 => 43,  164 => 42,  155 => 39,  152 => 38,  147 => 37,  138 => 36,  119 => 31,  108 => 27,  106 => 26,  104 => 25,  98 => 22,  96 => 21,  94 => 20,  92 => 19,  90 => 18,  85 => 15,  78 => 14,  76 => 13,  70 => 12,  66 => 10,  63 => 8,  61 => 7,  52 => 6,  42 => 1,  40 => 34,  38 => 33,  36 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}
{% form_theme edit_form.ctVerificateur _self %}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
            {%- if placeholder is not none -%}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {{ placeholder != '' ? placeholder|trans({}, translation_domain) }}
                </option>
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
    </span>
{%- endblock choice_widget_collapsed -%}

{% block title %}{{ parent() }} Ajout motif {% endblock %}

{% set menu_const_av_ded           = true %}
{% set menu_const_av_ded_create    = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}


    <div class=\"panel panel-default\">
        <div class=\"panel-heading text-center\"><h3>Caracteristiques du vehicule</h3></div>
        <div class=\"panel-body\">
            {{ form_start(edit_form) }}
            <div class=\"row\">
                {% for cadc in edit_form.ctConstAvDedCaracs %}
                    {% form_theme cadc.ctGenre _self %}
                    {% form_theme cadc.ctMarque _self %}
                    {% form_theme cadc.ctSourceEnergie _self %}
                    {% form_theme cadc.ctCarosserie _self %}
                    <div class=\"col-md-6\">
                        <div class=\"box box-success\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    {{ form_widget(cadc.ctConstAvDedType, {'attr': {'class': 'form-control hide'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_widget(cadc.cadInputCaracType, {'attr': {'class': 'form-control kl-select-cadt'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.cadPremiereCircule) }}
                                    {{ form_widget(cadc.cadPremiereCircule,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.ctGenre) }}
                                    {{ form_widget(cadc.ctGenre,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.ctMarque) }}
                                    {{ form_widget(cadc.ctMarque,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.cadTypeCar) }}
                                    {{ form_widget(cadc.cadTypeCar,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.cadNumSerieType) }}
                                    {{ form_widget(cadc.cadNumSerieType,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.cadNumMoteur) }}
                                    {{ form_widget(cadc.cadNumMoteur,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.ctSourceEnergie) }}
                                    {{ form_widget(cadc.ctSourceEnergie,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.cadCylindre) }}
                                    {{ form_widget(cadc.cadCylindre,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.cadPuissance) }}
                                    {{ form_widget(cadc.cadPuissance,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.ctCarosserie) }}
                                    {{ form_widget(cadc.ctCarosserie,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.cadNbrAssis) }}
                                    {{ form_widget(cadc.cadNbrAssis,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <hr/>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.cadLargeur) }}
                                    {{ form_widget(cadc.cadLargeur,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.cadHauteur) }}
                                    {{ form_widget(cadc.cadHauteur,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.cadLongueur) }}
                                    {{ form_widget(cadc.cadLongueur,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <hr/>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.cadChargeUtile) }}
                                    {{ form_widget(cadc.cadChargeUtile,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.cadPoidsVide) }}
                                    {{ form_widget(cadc.cadPoidsVide,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.cadPoidsTotalCharge) }}
                                    {{ form_widget(cadc.cadPoidsTotalCharge,{'attr': {'class': 'form-control'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(cadc.cadPoidsMaxima) }}
                                    {{ form_widget(cadc.cadPoidsMaxima,{'attr': {'class': 'form-control'}})}}
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
            <div class=\"kl-cav\">
                <div class=\"col-md-12\">
                    {#<div class=\"box-body\">#}
                    {{ form_row(edit_form.ctVerificateur ) }}
                    {{ form_row(edit_form.cadImmatriculation ) }}
                    {{ form_row(edit_form.cadProvenance) }}
                    {{ form_row(edit_form.cadDateEmbarquement) }}
                    {{ form_row(edit_form.cadLieuEmbarquement) }}
                    {{ form_row(edit_form.cadProprietaireNom) }}
                    {{ form_row(edit_form.cadProprietaireAdresse) }}
                    {{ form_row(edit_form.cadDivers) }}
                    {{ form_row(edit_form.cadConforme) }}
                    {{ form_row(edit_form.cadBonEtat) }}
                    {{ form_row(edit_form.cadSecPers) }}
                    {{ form_row(edit_form.cadSecMarch) }}
                    {{ form_row(edit_form.cadProtecEnv) }}
                    {#</div>#}
                </div>
            </div>
            
            {# {% if adesit == true %}
            <div class=\"kl-cav\">
                <div class=\"col-md-12\">
                    Informations des imprimés utilisés
                    <div class=\"box box-warning\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations imprimés techniques utilisés</h3>
                        </div>

                        <div class=\"row\">
                            <div class=\"box-body\">
                                <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                    <label for=\"ct_imprime_tech_use\">Séléctionner les N° imprimés utilisés</label>
                                    <select id=\"ct_imprime_tech_use\" name=\"ct_imprime_tech_use[]\" class=\"form-control select2 mx-6\"
                                        style=\"width: 100%;\" data-placeholder=\"  Choisir\" multiple=\"\" required>
                                        {% for imprime_use in imprimes_use %}
                                            <option value=\"{{ imprime_use.id }}\" selected>
                                                {{ imprime_use.ituNumero }}
                                            </option>
                                        {% endfor %}
                                        {% for imprime_tech in imprimes_tech %}
                                        <optgroup label=\"{{ imprime_tech.nomImprimeTech|upper }}\">
                                            {% for imprime_tech_use in imprimes_tech_use %}
                                                {% if imprime_tech.id == imprime_tech_use.ctImprimeTech.id %}
                                                <option value=\"{{ imprime_tech_use.id }}\">
                                                    {{ imprime_tech_use.ituNumero|upper }}
                                                </option>
                                                {% endif %}
                                            {% endfor %}
                                        </optgroup>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {% endif %} #}
        </div>
        <div class=\"box-footer\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
            <a href=\"{{ path('const_av_ded_index') }}\"
               class=\"btn btn-default pull-left btn-mini-rectif\" >
                Retour à la liste
            </a>
        </div>
        {{ form_end(edit_form) }}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>

    <script src=\"{{ asset('backoffice/js/edit.reception.js') }}\"></script>
{% endblock %}", "AdminBundle:CtConstatationAvDedouanement:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtConstatationAvDedouanement/edit.html.twig");
    }
}
