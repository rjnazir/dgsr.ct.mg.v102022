<?php

/* AdminBundle:CtCarteGrise:edit.html.twig */
class __TwigTemplate_61e265168f706676b8e8d6a9e699b08b1ff0442fdb1403f598c2579412cc4499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCarteGrise:edit.html.twig", 1);
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
        $__internal_4f00c150b33e8d65d4ffc01102a8c8784463a7a31fe54c883e7ef61d5429bb10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f00c150b33e8d65d4ffc01102a8c8784463a7a31fe54c883e7ef61d5429bb10->enter($__internal_4f00c150b33e8d65d4ffc01102a8c8784463a7a31fe54c883e7ef61d5429bb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarteGrise:edit.html.twig"));

        $__internal_a7a00c5ef075f2a3ffa84f09996650e65ceec5d5d0a67c936180ae1f4cd84915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a00c5ef075f2a3ffa84f09996650e65ceec5d5d0a67c936180ae1f4cd84915->enter($__internal_a7a00c5ef075f2a3ffa84f09996650e65ceec5d5d0a67c936180ae1f4cd84915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarteGrise:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:fields.html.twig"));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "ctMarque", array()), array(0 => $this));
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "ctGenre", array()), array(0 => $this));
        // line 7
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarosserie", array()), array(0 => $this));
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), array(0 => $this));
        // line 37
        $context["menu_carte_grise"] = true;
        // line 38
        $context["menu_carte_grise_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f00c150b33e8d65d4ffc01102a8c8784463a7a31fe54c883e7ef61d5429bb10->leave($__internal_4f00c150b33e8d65d4ffc01102a8c8784463a7a31fe54c883e7ef61d5429bb10_prof);

        
        $__internal_a7a00c5ef075f2a3ffa84f09996650e65ceec5d5d0a67c936180ae1f4cd84915->leave($__internal_a7a00c5ef075f2a3ffa84f09996650e65ceec5d5d0a67c936180ae1f4cd84915_prof);

    }

    // line 10
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_eef0e6f7898566f5ec15d226160e8eb5edca2dc1eebcd3c5336611839396147d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef0e6f7898566f5ec15d226160e8eb5edca2dc1eebcd3c5336611839396147d->enter($__internal_eef0e6f7898566f5ec15d226160e8eb5edca2dc1eebcd3c5336611839396147d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_2133ca4c5d36a0592221d362048a250b3683b9e59da6b8f652ed5df1eee79288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2133ca4c5d36a0592221d362048a250b3683b9e59da6b8f652ed5df1eee79288->enter($__internal_2133ca4c5d36a0592221d362048a250b3683b9e59da6b8f652ed5df1eee79288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 11
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 12
            $context["required"] = false;
        }
        // line 14
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 16
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 17
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 18
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 19
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 22
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 23
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 24
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 25
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 26
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 29
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 30
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 31
        echo "</select>
    </span>";
        
        $__internal_2133ca4c5d36a0592221d362048a250b3683b9e59da6b8f652ed5df1eee79288->leave($__internal_2133ca4c5d36a0592221d362048a250b3683b9e59da6b8f652ed5df1eee79288_prof);

        
        $__internal_eef0e6f7898566f5ec15d226160e8eb5edca2dc1eebcd3c5336611839396147d->leave($__internal_eef0e6f7898566f5ec15d226160e8eb5edca2dc1eebcd3c5336611839396147d_prof);

    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
        $__internal_4deb8f4453070bb805a9fd39322edfb85e1a0fefa22107f8e50d6441fbfffb18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4deb8f4453070bb805a9fd39322edfb85e1a0fefa22107f8e50d6441fbfffb18->enter($__internal_4deb8f4453070bb805a9fd39322edfb85e1a0fefa22107f8e50d6441fbfffb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9aa862b539454848cbf8e749e55d8b12686b81bd67ebf276675adc64e63a1cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa862b539454848cbf8e749e55d8b12686b81bd67ebf276675adc64e63a1cb4->enter($__internal_9aa862b539454848cbf8e749e55d8b12686b81bd67ebf276675adc64e63a1cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Carte grise ";
        
        $__internal_9aa862b539454848cbf8e749e55d8b12686b81bd67ebf276675adc64e63a1cb4->leave($__internal_9aa862b539454848cbf8e749e55d8b12686b81bd67ebf276675adc64e63a1cb4_prof);

        
        $__internal_4deb8f4453070bb805a9fd39322edfb85e1a0fefa22107f8e50d6441fbfffb18->leave($__internal_4deb8f4453070bb805a9fd39322edfb85e1a0fefa22107f8e50d6441fbfffb18_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_ced54c993a955123695176deece8b5777d3fee8ced35d2ed317fb2a40bc5eac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced54c993a955123695176deece8b5777d3fee8ced35d2ed317fb2a40bc5eac1->enter($__internal_ced54c993a955123695176deece8b5777d3fee8ced35d2ed317fb2a40bc5eac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9201b9f40044b811341bffe023b899874ad2116de4efd80840193e4d811461cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9201b9f40044b811341bffe023b899874ad2116de4efd80840193e4d811461cb->enter($__internal_9201b9f40044b811341bffe023b899874ad2116de4efd80840193e4d811461cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 42
            echo "        <div class=\"callout callout-success\">
            ";
            // line 43
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 47
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 48
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
    ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        <div class=\"row\">
            ";
        // line 55
        echo "            <div class=\"col-md-6\">
                <div class=\"box box-primary\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations carte grise</h3>
                    </div>

                    <div class=\"box-body\">
                        <div class=\"";
        // line 62
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), 'row');
        echo "
                        </div>
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgDateEmission", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 68
        echo "
                        <hr>
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgImmatriculation", array()), 'row');
        echo "
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgNumIdentification", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgNom", array()), 'row');
        echo "
                        ";
        // line 75
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgProfession", array()), 'row');
        echo "
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgAdresse", array()), 'row');
        echo "
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgPhone", array()), 'row');
        echo "
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgCommune", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgIsTransport", array()), 'row');
        echo "
                        <div id=\"form-transport\" class=\"";
        // line 81
        if (($this->getAttribute(($context["carte_grise"] ?? $this->getContext($context, "carte_grise")), "cgIsTransport", array()) == 0)) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgNomCooperative", array()), 'row');
        echo "
                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgItineraire", array()), 'row');
        echo "
                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgNumVignette", array()), 'row');
        echo "
                            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctZoneDeserte", array()), 'row');
        echo "
                        </div>
                        <hr>
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgNumCarteViolette", array()), 'row');
        echo "
                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgLieuCarteViolette", array()), 'row');
        echo "
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgDateCarteViolette", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 93
        echo "
                        <hr>
                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgPatente", array()), 'row');
        echo "
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgAni", array()), 'row');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 102
        echo "            <div class=\"col-md-6\">
                <div class=\"box box-success\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations véhicule</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "ctGenre", array()), 'row');
        echo "
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcType", array()), 'row');
        echo "
                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "ctMarque", array()), 'row');
        echo "
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcNumSerie", array()), 'row');
        echo "
                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarosserie", array()), 'row');
        echo "
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcNumMoteur", array()), 'row');
        echo "
                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctSourceEnergie", array()), 'row');
        echo "
                        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgPuissanceAdmin", array()), 'row');
        echo "
                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgNbrAssis", array()), 'row');
        echo "
                        ";
        // line 118
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcPoidsVide", array()), 'row');
        echo "
                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcChargeUtile", array()), 'row');
        echo "
                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcPoidsTotalCharge", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgMiseEnService", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 126
        echo "
                    </div>

                    ";
        // line 130
        echo "                    <div class=\"hidden\">
                        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcPuissance", array()), 'row');
        echo "
                        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcCylindre", array()), 'row');
        echo "
                        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcHauteur", array()), 'row');
        echo "
                        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcLongueur", array()), 'row');
        echo "
                        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcLargeur", array()), 'row');
        echo "
                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcProvenance", array()), 'row');
        echo "
                        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgNbrDebout", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgRta", array()), 'row');
        echo "
                        ";
        // line 141
        echo "                        ";
        // line 142
        echo "                        <hr>
                        ";
        // line 144
        echo "                        ";
        // line 145
        echo "                        ";
        // line 146
        echo "                        <hr>
                        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgDateVignette", array()), 'row');
        echo "
                        ";
        // line 148
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cgLieuVignette", array()), 'row');
        echo "
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            ";
        // line 156
        echo "            <div class=\"col-md-12\">
                <div class=\"box box-success\">
                    <div class=\"box-body\">
                        <input type=\"submit\" class=\"btn btn-success\" value=\"Enregistrer\" name=\"update_carte_grise\"/>
                        <a href=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_new");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à l'ajout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    ";
        // line 168
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
";
        
        $__internal_9201b9f40044b811341bffe023b899874ad2116de4efd80840193e4d811461cb->leave($__internal_9201b9f40044b811341bffe023b899874ad2116de4efd80840193e4d811461cb_prof);

        
        $__internal_ced54c993a955123695176deece8b5777d3fee8ced35d2ed317fb2a40bc5eac1->leave($__internal_ced54c993a955123695176deece8b5777d3fee8ced35d2ed317fb2a40bc5eac1_prof);

    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_920dc9a0e13a545670fc31202cf98fa9d35fdb5f6e00120dcf53c1b9a0e57548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920dc9a0e13a545670fc31202cf98fa9d35fdb5f6e00120dcf53c1b9a0e57548->enter($__internal_920dc9a0e13a545670fc31202cf98fa9d35fdb5f6e00120dcf53c1b9a0e57548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f5490ec36ddfa6c69df40570139c026292c8b2fb39a5f5106b7812709f657966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5490ec36ddfa6c69df40570139c026292c8b2fb39a5f5106b7812709f657966->enter($__internal_f5490ec36ddfa6c69df40570139c026292c8b2fb39a5f5106b7812709f657966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 172
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/add.carte.grise.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f5490ec36ddfa6c69df40570139c026292c8b2fb39a5f5106b7812709f657966->leave($__internal_f5490ec36ddfa6c69df40570139c026292c8b2fb39a5f5106b7812709f657966_prof);

        
        $__internal_920dc9a0e13a545670fc31202cf98fa9d35fdb5f6e00120dcf53c1b9a0e57548->leave($__internal_920dc9a0e13a545670fc31202cf98fa9d35fdb5f6e00120dcf53c1b9a0e57548_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCarteGrise:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 174,  471 => 172,  462 => 171,  450 => 168,  439 => 160,  433 => 156,  423 => 148,  419 => 147,  416 => 146,  414 => 145,  412 => 144,  409 => 142,  407 => 141,  403 => 139,  398 => 137,  394 => 136,  390 => 135,  386 => 134,  382 => 133,  378 => 132,  374 => 131,  371 => 130,  366 => 126,  364 => 122,  359 => 120,  355 => 119,  351 => 118,  347 => 117,  343 => 116,  339 => 115,  335 => 114,  331 => 113,  327 => 112,  323 => 111,  319 => 110,  315 => 109,  306 => 102,  298 => 96,  294 => 95,  290 => 93,  288 => 90,  284 => 89,  280 => 88,  274 => 85,  270 => 84,  266 => 83,  262 => 82,  256 => 81,  252 => 80,  247 => 78,  243 => 77,  239 => 76,  234 => 75,  230 => 73,  225 => 71,  221 => 70,  217 => 68,  215 => 65,  210 => 63,  204 => 62,  195 => 55,  190 => 52,  187 => 51,  178 => 48,  175 => 47,  170 => 46,  161 => 43,  158 => 42,  153 => 41,  144 => 40,  125 => 35,  114 => 31,  112 => 30,  110 => 29,  104 => 26,  102 => 25,  100 => 24,  98 => 23,  96 => 22,  91 => 19,  84 => 18,  82 => 17,  76 => 16,  72 => 14,  69 => 12,  67 => 11,  58 => 10,  48 => 1,  46 => 38,  44 => 37,  42 => 8,  40 => 7,  38 => 6,  36 => 5,  34 => 3,  11 => 1,);
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

{% form_theme edit_form ':form:fields.html.twig' %}

{% form_theme edit_form.ctVehicule.ctMarque _self %}
{% form_theme edit_form.ctVehicule.ctGenre _self %}
{% form_theme edit_form.ctCarosserie _self %}
{% form_theme edit_form.ctCentre _self %}

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

{% block title %}{{ parent() }} Modification Carte grise {% endblock %}

{% set menu_carte_grise        = true %}
{% set menu_carte_grise_create = true %}

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

    {{ form_start(edit_form) }}
        <div class=\"row\">
            {# Formulaire propriétaire #}
            <div class=\"col-md-6\">
                <div class=\"box box-primary\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations carte grise</h3>
                    </div>

                    <div class=\"box-body\">
                        <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                            {{ form_row(edit_form.ctCentre) }}
                        </div>
                        {{ form_row(edit_form.cgDateEmission, {
                            'attr': {
                                'class': ' datepicker-edit'
                            }}) }}
                        <hr>
                        {{ form_row(edit_form.cgImmatriculation) }}
                        {{ form_row(edit_form.cgNumIdentification) }}
                        <hr>
                        {{ form_row(edit_form.cgNom) }}
                        {#{{ form_row(edit_form.cgPrenom) }}#}
                        {{ form_row(edit_form.cgProfession) }}
                        {{ form_row(edit_form.cgAdresse) }}
                        {{ form_row(edit_form.cgPhone) }}
                        {{ form_row(edit_form.cgCommune) }}
                        <hr>
                        {{ form_row(edit_form.cgIsTransport) }}
                        <div id=\"form-transport\" class=\"{% if carte_grise.cgIsTransport == 0 %}hidden{% endif %}\">
                            {{ form_row(edit_form.cgNomCooperative) }}
                            {{ form_row(edit_form.cgItineraire) }}
                            {{ form_row(edit_form.cgNumVignette) }}
                            {{ form_row(edit_form.ctZoneDeserte) }}
                        </div>
                        <hr>
                        {{ form_row(edit_form.cgNumCarteViolette) }}
                        {{ form_row(edit_form.cgLieuCarteViolette) }}
                        {{ form_row(edit_form.cgDateCarteViolette, {
                            'attr': {
                                'class': ' datepicker-edit'
                            }}) }}
                        <hr>
                        {{ form_row(edit_form.cgPatente) }}
                        {{ form_row(edit_form.cgAni) }}
                    </div>
                </div>
            </div>

            {# Formulaire véhicule #}
            <div class=\"col-md-6\">
                <div class=\"box box-success\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations véhicule</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctVehicule.ctGenre) }}
                        {{ form_row(edit_form.ctVehicule.vhcType) }}
                        {{ form_row(edit_form.ctVehicule.ctMarque) }}
                        {{ form_row(edit_form.ctVehicule.vhcNumSerie) }}
                        {{ form_row(edit_form.ctCarosserie) }}
                        {{ form_row(edit_form.ctVehicule.vhcNumMoteur) }}
                        {{ form_row(edit_form.ctSourceEnergie) }}
                        {{ form_row(edit_form.cgPuissanceAdmin) }}
                        {{ form_row(edit_form.cgNbrAssis) }}
                        {{ form_row(edit_form.ctVehicule.vhcPoidsVide) }}
                        {{ form_row(edit_form.ctVehicule.vhcChargeUtile) }}
                        {{ form_row(edit_form.ctVehicule.vhcPoidsTotalCharge) }}
                        <hr>
                        {{ form_row(edit_form.cgMiseEnService, {
                            'attr': {
                                'class': ' datepicker-edit'
                            }})
                        }}
                    </div>

                    {# Champs cachés #}
                    <div class=\"hidden\">
                        {{ form_row(edit_form.ctVehicule.vhcPuissance) }}
                        {{ form_row(edit_form.ctVehicule.vhcCylindre) }}
                        {{ form_row(edit_form.ctVehicule.vhcHauteur) }}
                        {{ form_row(edit_form.ctVehicule.vhcLongueur) }}
                        {{ form_row(edit_form.ctVehicule.vhcLargeur) }}
                        {{ form_row(edit_form.ctVehicule.vhcProvenance) }}
                        {{ form_row(edit_form.cgNbrDebout) }}
                        <hr>
                        {{ form_row(edit_form.cgRta) }}
                        {#{{ form_row(edit_form.cgPatente) }}#}
                        {#{{ form_row(edit_form.cgAni) }}#}
                        <hr>
                        {#{{ form_row(edit_form.cgNumCarteViolette) }}#}
                        {#{{ form_row(edit_form.cgLieuCarteViolette) }}#}
                        {#{{ form_row(edit_form.cgDateCarteViolette) }}#}
                        <hr>
                        {{ form_row(edit_form.cgDateVignette) }}
                        {{ form_row(edit_form.cgLieuVignette) }}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            {# Formulaire enregistrement #}
            <div class=\"col-md-12\">
                <div class=\"box box-success\">
                    <div class=\"box-body\">
                        <input type=\"submit\" class=\"btn btn-success\" value=\"Enregistrer\" name=\"update_carte_grise\"/>
                        <a href=\"{{ path('carte_grise_new') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à l'ajout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    {{ form_end(edit_form) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('backoffice/js/add.carte.grise.js') }}\"></script>
{% endblock %}", "AdminBundle:CtCarteGrise:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCarteGrise/edit.html.twig");
    }
}
