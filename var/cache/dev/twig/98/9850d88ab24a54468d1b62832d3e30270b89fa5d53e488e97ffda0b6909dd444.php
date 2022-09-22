<?php

/* @Admin/CtCarteGrise/edit.html.twig */
class __TwigTemplate_6c6b885b9a8c5970f15320e5378ed166e7336bcd805ed3822a32433584605477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtCarteGrise/edit.html.twig", 1);
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
        $__internal_6a0059c312f54e491558c6c4b1aab7cf60f45fd20aa11d9d4672d2892ac41fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a0059c312f54e491558c6c4b1aab7cf60f45fd20aa11d9d4672d2892ac41fe4->enter($__internal_6a0059c312f54e491558c6c4b1aab7cf60f45fd20aa11d9d4672d2892ac41fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCarteGrise/edit.html.twig"));

        $__internal_30cf9a68182ce89023bb8129309db3fccb504698ca6a0b1dc53b07737c9e8fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30cf9a68182ce89023bb8129309db3fccb504698ca6a0b1dc53b07737c9e8fbc->enter($__internal_30cf9a68182ce89023bb8129309db3fccb504698ca6a0b1dc53b07737c9e8fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCarteGrise/edit.html.twig"));

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
        
        $__internal_6a0059c312f54e491558c6c4b1aab7cf60f45fd20aa11d9d4672d2892ac41fe4->leave($__internal_6a0059c312f54e491558c6c4b1aab7cf60f45fd20aa11d9d4672d2892ac41fe4_prof);

        
        $__internal_30cf9a68182ce89023bb8129309db3fccb504698ca6a0b1dc53b07737c9e8fbc->leave($__internal_30cf9a68182ce89023bb8129309db3fccb504698ca6a0b1dc53b07737c9e8fbc_prof);

    }

    // line 10
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d2d46a2c2b774569e27245a1d094e75c7f57eb97186576300cc66f6aaf869ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d46a2c2b774569e27245a1d094e75c7f57eb97186576300cc66f6aaf869ef2->enter($__internal_d2d46a2c2b774569e27245a1d094e75c7f57eb97186576300cc66f6aaf869ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_e497bb90afc4771e3e8e8e096d4c159000129b566206a33cfc9b94d924f7f93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e497bb90afc4771e3e8e8e096d4c159000129b566206a33cfc9b94d924f7f93b->enter($__internal_e497bb90afc4771e3e8e8e096d4c159000129b566206a33cfc9b94d924f7f93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_e497bb90afc4771e3e8e8e096d4c159000129b566206a33cfc9b94d924f7f93b->leave($__internal_e497bb90afc4771e3e8e8e096d4c159000129b566206a33cfc9b94d924f7f93b_prof);

        
        $__internal_d2d46a2c2b774569e27245a1d094e75c7f57eb97186576300cc66f6aaf869ef2->leave($__internal_d2d46a2c2b774569e27245a1d094e75c7f57eb97186576300cc66f6aaf869ef2_prof);

    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
        $__internal_985ca1dd4c30e2832360e483dba091db020c12642e0af01b69b2cf536c44f701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_985ca1dd4c30e2832360e483dba091db020c12642e0af01b69b2cf536c44f701->enter($__internal_985ca1dd4c30e2832360e483dba091db020c12642e0af01b69b2cf536c44f701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15be2d426a806ef5867c25acf90f898cdf64f367baf85283080b72edf4c6aeeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15be2d426a806ef5867c25acf90f898cdf64f367baf85283080b72edf4c6aeeb->enter($__internal_15be2d426a806ef5867c25acf90f898cdf64f367baf85283080b72edf4c6aeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Carte grise ";
        
        $__internal_15be2d426a806ef5867c25acf90f898cdf64f367baf85283080b72edf4c6aeeb->leave($__internal_15be2d426a806ef5867c25acf90f898cdf64f367baf85283080b72edf4c6aeeb_prof);

        
        $__internal_985ca1dd4c30e2832360e483dba091db020c12642e0af01b69b2cf536c44f701->leave($__internal_985ca1dd4c30e2832360e483dba091db020c12642e0af01b69b2cf536c44f701_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d2118d771916393f2b632bcdebf4a39705037f2082d2d131133ca0189cd0da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2118d771916393f2b632bcdebf4a39705037f2082d2d131133ca0189cd0da1->enter($__internal_3d2118d771916393f2b632bcdebf4a39705037f2082d2d131133ca0189cd0da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4cd93080872bc403306becd79ef9e3ccec79f75e235118fa103a1ec05a1ad829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd93080872bc403306becd79ef9e3ccec79f75e235118fa103a1ec05a1ad829->enter($__internal_4cd93080872bc403306becd79ef9e3ccec79f75e235118fa103a1ec05a1ad829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4cd93080872bc403306becd79ef9e3ccec79f75e235118fa103a1ec05a1ad829->leave($__internal_4cd93080872bc403306becd79ef9e3ccec79f75e235118fa103a1ec05a1ad829_prof);

        
        $__internal_3d2118d771916393f2b632bcdebf4a39705037f2082d2d131133ca0189cd0da1->leave($__internal_3d2118d771916393f2b632bcdebf4a39705037f2082d2d131133ca0189cd0da1_prof);

    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4c6d3bb5eaac0ec6dbaa23275e0f58e0b988a369b72909be96e54d4c9bc772a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c6d3bb5eaac0ec6dbaa23275e0f58e0b988a369b72909be96e54d4c9bc772a->enter($__internal_d4c6d3bb5eaac0ec6dbaa23275e0f58e0b988a369b72909be96e54d4c9bc772a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f17bd092ed1f5bca025570ac29b19b0c0328f1d08632ea3e85763d3c0e2b7acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17bd092ed1f5bca025570ac29b19b0c0328f1d08632ea3e85763d3c0e2b7acb->enter($__internal_f17bd092ed1f5bca025570ac29b19b0c0328f1d08632ea3e85763d3c0e2b7acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 172
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/add.carte.grise.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f17bd092ed1f5bca025570ac29b19b0c0328f1d08632ea3e85763d3c0e2b7acb->leave($__internal_f17bd092ed1f5bca025570ac29b19b0c0328f1d08632ea3e85763d3c0e2b7acb_prof);

        
        $__internal_d4c6d3bb5eaac0ec6dbaa23275e0f58e0b988a369b72909be96e54d4c9bc772a->leave($__internal_d4c6d3bb5eaac0ec6dbaa23275e0f58e0b988a369b72909be96e54d4c9bc772a_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtCarteGrise/edit.html.twig";
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
{% endblock %}", "@Admin/CtCarteGrise/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtCarteGrise\\edit.html.twig");
    }
}
