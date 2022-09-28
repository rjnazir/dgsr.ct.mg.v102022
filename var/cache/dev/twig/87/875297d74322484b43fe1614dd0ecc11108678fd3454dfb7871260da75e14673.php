<?php

/* @Admin/CtVisite/edit.html.twig */
class __TwigTemplate_d22c3ad36ecdc689209ca781d49124f338551cb04bd1a0752954650cf60043db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisite/edit.html.twig", 1);
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
        $__internal_1aad2020457f7f78f414a0e7bbcad623a5afa52766ee75be6966f647d8ba8635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aad2020457f7f78f414a0e7bbcad623a5afa52766ee75be6966f647d8ba8635->enter($__internal_1aad2020457f7f78f414a0e7bbcad623a5afa52766ee75be6966f647d8ba8635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisite/edit.html.twig"));

        $__internal_c8a4e82dfa47a7b68ad5f1ccaa14939e870ed4f0936a1339d58223dfe851a831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a4e82dfa47a7b68ad5f1ccaa14939e870ed4f0936a1339d58223dfe851a831->enter($__internal_c8a4e82dfa47a7b68ad5f1ccaa14939e870ed4f0936a1339d58223dfe851a831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisite/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:fields.html.twig"));
        // line 9
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUsage", array()), array(0 => $this));
        // line 10
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVerificateur", array()), array(0 => $this));
        // line 11
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), array(0 => $this));
        // line 12
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVisiteExtra", array()), array(0 => $this));
        // line 13
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctAnomalie", array()), array(0 => $this));
        // line 42
        $context["menu_visite"] = true;
        // line 43
        $context["menu_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aad2020457f7f78f414a0e7bbcad623a5afa52766ee75be6966f647d8ba8635->leave($__internal_1aad2020457f7f78f414a0e7bbcad623a5afa52766ee75be6966f647d8ba8635_prof);

        
        $__internal_c8a4e82dfa47a7b68ad5f1ccaa14939e870ed4f0936a1339d58223dfe851a831->leave($__internal_c8a4e82dfa47a7b68ad5f1ccaa14939e870ed4f0936a1339d58223dfe851a831_prof);

    }

    // line 15
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_2f0d7ea186d4795667b506691943bb46abeed801700d3315629401337cd878f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0d7ea186d4795667b506691943bb46abeed801700d3315629401337cd878f4->enter($__internal_2f0d7ea186d4795667b506691943bb46abeed801700d3315629401337cd878f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6457e1288fee51c3b668df0f5f8491a22d2ae68e8ba076e1b92f06f378b7f43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6457e1288fee51c3b668df0f5f8491a22d2ae68e8ba076e1b92f06f378b7f43c->enter($__internal_6457e1288fee51c3b668df0f5f8491a22d2ae68e8ba076e1b92f06f378b7f43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 16
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 17
            $context["required"] = false;
        }
        // line 19
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 21
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 22
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 23
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 24
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 27
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 28
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 29
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 30
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 31
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 34
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 35
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 36
        echo "</select>
    </span>";
        
        $__internal_6457e1288fee51c3b668df0f5f8491a22d2ae68e8ba076e1b92f06f378b7f43c->leave($__internal_6457e1288fee51c3b668df0f5f8491a22d2ae68e8ba076e1b92f06f378b7f43c_prof);

        
        $__internal_2f0d7ea186d4795667b506691943bb46abeed801700d3315629401337cd878f4->leave($__internal_2f0d7ea186d4795667b506691943bb46abeed801700d3315629401337cd878f4_prof);

    }

    // line 40
    public function block_title($context, array $blocks = array())
    {
        $__internal_589f60bbb3809e021dcbbf06d3f1062f26257b40f314e3708da4743c2884de46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_589f60bbb3809e021dcbbf06d3f1062f26257b40f314e3708da4743c2884de46->enter($__internal_589f60bbb3809e021dcbbf06d3f1062f26257b40f314e3708da4743c2884de46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e61efbf68495bf0acdb3086356bad2f8a2b771728d297013b916e92f38e1e369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61efbf68495bf0acdb3086356bad2f8a2b771728d297013b916e92f38e1e369->enter($__internal_e61efbf68495bf0acdb3086356bad2f8a2b771728d297013b916e92f38e1e369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Visite technique ";
        
        $__internal_e61efbf68495bf0acdb3086356bad2f8a2b771728d297013b916e92f38e1e369->leave($__internal_e61efbf68495bf0acdb3086356bad2f8a2b771728d297013b916e92f38e1e369_prof);

        
        $__internal_589f60bbb3809e021dcbbf06d3f1062f26257b40f314e3708da4743c2884de46->leave($__internal_589f60bbb3809e021dcbbf06d3f1062f26257b40f314e3708da4743c2884de46_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_8474c81f5ce1ffa44a1c2c33edbe139950aa5809a928846b886cba2d157d6229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8474c81f5ce1ffa44a1c2c33edbe139950aa5809a928846b886cba2d157d6229->enter($__internal_8474c81f5ce1ffa44a1c2c33edbe139950aa5809a928846b886cba2d157d6229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8088341eb019f6f0f9d247a2936006aa4d0349eed88579351561524d2a2d3b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8088341eb019f6f0f9d247a2936006aa4d0349eed88579351561524d2a2d3b49->enter($__internal_8088341eb019f6f0f9d247a2936006aa4d0349eed88579351561524d2a2d3b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 47
            echo "        <div class=\"callout callout-success\">
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 52
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 53
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
    ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 61
        echo "                <div class=\"box box-success\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations carte grise</h3>
                    </div>
    
                    <div class=\"box-body\" id=\"form-carte-grise\">
                        <div class=\"";
        // line 67
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctCentre", array()), 'row');
        echo "
                        </div>
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgDateEmission", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 73
        echo "
                        <hr>
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgImmatriculation", array()), 'row');
        echo "
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNumIdentification", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNom", array()), 'row');
        echo "
                        ";
        // line 80
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgProfession", array()), 'row');
        echo "
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgAdresse", array()), 'row');
        echo "
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgPhone", array()), 'row');
        echo "
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgCommune", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgIsTransport", array()), 'row');
        echo "
                        <div id=\"form-transport\" class=\"";
        // line 86
        if (($this->getAttribute($this->getAttribute(($context["visite"] ?? $this->getContext($context, "visite")), "ctCarteGrise", array()), "cgIsTransport", array()) == 0)) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNomCooperative", array()), 'row');
        echo "
                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgItineraire", array()), 'row');
        echo "
                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNumVignette", array()), 'row');
        echo "
                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctZoneDeserte", array()), 'row');
        echo "
                        </div>
                    </div>
                </div>
    
                ";
        // line 96
        echo "                <div class=\"box box-success\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations véhicule</h3>
                    </div>
    
                    <div class=\"box-body\" id=\"form-vehicule\">
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "ctGenre", array()), 'row');
        echo "
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcType", array()), 'row');
        echo "
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "ctMarque", array()), 'row');
        echo "
                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcNumSerie", array()), 'row');
        echo "
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctCarosserie", array()), 'row');
        echo "
                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcNumMoteur", array()), 'row');
        echo "
                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctSourceEnergie", array()), 'row');
        echo "
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgPuissanceAdmin", array()), 'row');
        echo "
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNbrAssis", array()), 'row');
        echo "
                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPoidsTotalCharge", array()), 'row');
        echo "
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPoidsVide", array()), 'row');
        echo "
                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcChargeUtile", array()), 'row');
        echo "
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgMiseEnService", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 118
        echo "
                    </div>

                    ";
        // line 122
        echo "                    <div class=\"hidden\">
                        <input type=\"text\" name=\"ct-visite-id\" id=\"ct-visite-id\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute(($context["visite"] ?? $this->getContext($context, "visite")), "id", array()), "html", null, true);
        echo "\" />
                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPuissance", array()), 'row');
        echo "
                        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcCylindre", array()), 'row');
        echo "
                        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcHauteur", array()), 'row');
        echo "
                        ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcLongueur", array()), 'row');
        echo "
                        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcLargeur", array()), 'row');
        echo "
                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcProvenance", array()), 'row');
        echo "
                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNbrDebout", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgRta", array()), 'row');
        echo "
                        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgPatente", array()), 'row');
        echo "
                        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgAni", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNumCarteViolette", array()), 'row');
        echo "
                        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgLieuCarteViolette", array()), 'row');
        echo "
                        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgDateCarteViolette", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 140
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgDateVignette", array()), 'row');
        echo "
                        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgLieuVignette", array()), 'row');
        echo "
                    </div>
                </div>
            </div>
    
            ";
        // line 147
        echo "            <div class=\"col-md-6\">
                <div class=\"box box-primary\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations visite technique</h3>
                    </div>
    
                    <div class=\"box-body\">
                        <div class=\"";
        // line 154
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), 'row');
        echo "
                        </div>
                        ";
        // line 157
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctTypeVisite", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUsage", array()), 'row');
        echo "
                        ";
        // line 160
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUtilisation", array()), 'row');
        echo "
                        ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctAnomalie", array()), 'row');
        echo "
                        <div id=\"form-duree-reparation\" class=\"";
        // line 162
        if ((twig_length_filter($this->env, $this->getAttribute(($context["visite"] ?? $this->getContext($context, "visite")), "ctAnomalie", array())) == 0)) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vstDureeReparation", array()), 'row');
        echo "
                        </div>
                        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vstDateExpiration", array()), 'row');
        echo "
                        ";
        // line 166
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVerificateur", array()), 'row');
        echo "
                        ";
        // line 167
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVisiteExtra", array()), 'row');
        echo "
                    </div>
                </div>
                
                ";
        // line 205
        echo "            </div>
        </div>
    
        ";
        // line 209
        echo "        <div class=\"row\">
            <div class=\"box box-success\">
                <div class=\"box-body\">
                    <div class=\"col-md-4\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite\"/>
                        <a href=\"";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_new");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à l'ajout
                        </a>
                    </div>
                    <div class=\"col-md-4\">
                        <input type=\"button\" class=\"btn btn-success\" id=\"btn-generate-reporting\"
                               value=\"Générer la carte visite\" name=\"generate_carte_visite\"/>
                        <span class=\"kl-edit-link-download-cv\" id=\"link-download\"></span>
                    </div>
                    <div class=\"col-md-4\">
                        <input type=\"button\" class=\"btn btn-primary\" id=\"btn-generate-pv-visite\"
                               value=\"Générer PV\" name=\"generate_pv_visite\"/>
                        <span class=\"kl-edit-link-download-pv\" id=\"link-download-pv\"></span>
                        ";
        // line 229
        echo "                    </div>
                </div>
            </div>
        </div>
    ";
        // line 233
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
";
        
        $__internal_8088341eb019f6f0f9d247a2936006aa4d0349eed88579351561524d2a2d3b49->leave($__internal_8088341eb019f6f0f9d247a2936006aa4d0349eed88579351561524d2a2d3b49_prof);

        
        $__internal_8474c81f5ce1ffa44a1c2c33edbe139950aa5809a928846b886cba2d157d6229->leave($__internal_8474c81f5ce1ffa44a1c2c33edbe139950aa5809a928846b886cba2d157d6229_prof);

    }

    // line 236
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78f0432cc188c7ca2a7f56e7c3bb14aa5fd2e7d2a6a14842ff9880211b30453f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f0432cc188c7ca2a7f56e7c3bb14aa5fd2e7d2a6a14842ff9880211b30453f->enter($__internal_78f0432cc188c7ca2a7f56e7c3bb14aa5fd2e7d2a6a14842ff9880211b30453f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6c91896d235959cf11452f91e12d894f75908635a2b50e36f09618c9a374c668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c91896d235959cf11452f91e12d894f75908635a2b50e36f09618c9a374c668->enter($__internal_6c91896d235959cf11452f91e12d894f75908635a2b50e36f09618c9a374c668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 237
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        \$(\".ct_imprime_tech_use\").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
        var _fill_form_carte_grise_ajax_uri = \"";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_fill_info_by_immatriculation_ajax");
        echo "\";
        var _autocomplete_numero_serie_ajax_uri = \"";
        // line 249
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_serie_ajax");
        echo "\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"";
        // line 250
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_immatriculation_ajax");
        echo "\";
        var _generate_reporting_ajax_uri = \"";
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_generate_reporting_ajax");
        echo "\";
        var _generate_pv_visite_ajax_uri = \"";
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_generate_pv_visite_ajax");
        echo "\"
        var _select_verif_by_centre_ajax_uri = \"";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_verificateur_by_centre_ajax");
        echo "\";
        var _select_usage_by_type_visite_ajax_uri = \"";
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_usage_by_type_visite_ajax");
        echo "\";
        var _select_expiration_by_usage_ajax_uri = \"";
        // line 255
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_expiration_by_usage_ajax");
        echo "\";
    </script>
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/add.visite.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6c91896d235959cf11452f91e12d894f75908635a2b50e36f09618c9a374c668->leave($__internal_6c91896d235959cf11452f91e12d894f75908635a2b50e36f09618c9a374c668_prof);

        
        $__internal_78f0432cc188c7ca2a7f56e7c3bb14aa5fd2e7d2a6a14842ff9880211b30453f->leave($__internal_78f0432cc188c7ca2a7f56e7c3bb14aa5fd2e7d2a6a14842ff9880211b30453f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtVisite/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 257,  586 => 255,  582 => 254,  578 => 253,  574 => 252,  570 => 251,  566 => 250,  562 => 249,  558 => 248,  549 => 242,  540 => 237,  531 => 236,  519 => 233,  513 => 229,  496 => 214,  489 => 209,  484 => 205,  477 => 167,  473 => 166,  469 => 165,  464 => 163,  458 => 162,  454 => 161,  450 => 160,  446 => 159,  441 => 157,  436 => 155,  430 => 154,  421 => 147,  413 => 141,  409 => 140,  404 => 138,  400 => 137,  396 => 136,  391 => 134,  387 => 133,  383 => 132,  378 => 130,  374 => 129,  370 => 128,  366 => 127,  362 => 126,  358 => 125,  354 => 124,  350 => 123,  347 => 122,  342 => 118,  340 => 114,  336 => 113,  332 => 112,  328 => 111,  324 => 110,  320 => 109,  316 => 108,  312 => 107,  308 => 106,  304 => 105,  300 => 104,  296 => 103,  292 => 102,  284 => 96,  276 => 90,  272 => 89,  268 => 88,  264 => 87,  258 => 86,  254 => 85,  249 => 83,  245 => 82,  241 => 81,  236 => 80,  232 => 78,  227 => 76,  223 => 75,  219 => 73,  217 => 70,  212 => 68,  206 => 67,  198 => 61,  192 => 57,  189 => 56,  180 => 53,  177 => 52,  172 => 51,  163 => 48,  160 => 47,  155 => 46,  146 => 45,  127 => 40,  116 => 36,  114 => 35,  112 => 34,  106 => 31,  104 => 30,  102 => 29,  100 => 28,  98 => 27,  93 => 24,  86 => 23,  84 => 22,  78 => 21,  74 => 19,  71 => 17,  69 => 16,  60 => 15,  50 => 1,  48 => 43,  46 => 42,  44 => 13,  42 => 12,  40 => 11,  38 => 10,  36 => 9,  34 => 3,  11 => 1,);
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

{#{% form_theme edit_form.ctCarteGrise.ctVehicule.ctMarque _self %}#}
{#{% form_theme edit_form.ctCarteGrise.ctVehicule.ctGenre _self %}#}
{#{% form_theme edit_form.ctCarteGrise.ctCentre _self %}#}
{#{% form_theme edit_form.ctCarteGrise.ctCarosserie _self %}#}
{% form_theme edit_form.ctUsage _self %}
{% form_theme edit_form.ctVerificateur _self %}
{% form_theme edit_form.ctCentre _self %}
{% form_theme edit_form.ctVisiteExtra _self %}
{% form_theme edit_form.ctAnomalie _self %}

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

{% block title %}{{ parent() }} Modification Visite technique {% endblock %}

{% set menu_visite        = true %}
{% set menu_visite_create = true %}

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
            <div class=\"col-md-6\">
                {# Formulaire carte grise #}
                <div class=\"box box-success\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations carte grise</h3>
                    </div>
    
                    <div class=\"box-body\" id=\"form-carte-grise\">
                        <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                            {{ form_row(edit_form.ctCarteGrise.ctCentre) }}
                        </div>
                        {{ form_row(edit_form.ctCarteGrise.cgDateEmission, {
                            'attr': {
                                'class': ' datepicker-edit'
                            }}) }}
                        <hr>
                        {{ form_row(edit_form.ctCarteGrise.cgImmatriculation) }}
                        {{ form_row(edit_form.ctCarteGrise.cgNumIdentification) }}
                        <hr>
                        {{ form_row(edit_form.ctCarteGrise.cgNom) }}
                        {#{{ form_row(edit_form.ctCarteGrise.cgPrenom) }}#}
                        {{ form_row(edit_form.ctCarteGrise.cgProfession) }}
                        {{ form_row(edit_form.ctCarteGrise.cgAdresse) }}
                        {{ form_row(edit_form.ctCarteGrise.cgPhone) }}
                        {{ form_row(edit_form.ctCarteGrise.cgCommune) }}
                        <hr>
                        {{ form_row(edit_form.ctCarteGrise.cgIsTransport) }}
                        <div id=\"form-transport\" class=\"{% if visite.ctCarteGrise.cgIsTransport == 0 %}hidden{% endif %}\">
                            {{ form_row(edit_form.ctCarteGrise.cgNomCooperative) }}
                            {{ form_row(edit_form.ctCarteGrise.cgItineraire) }}
                            {{ form_row(edit_form.ctCarteGrise.cgNumVignette) }}
                            {{ form_row(edit_form.ctCarteGrise.ctZoneDeserte) }}
                        </div>
                    </div>
                </div>
    
                {# Formulaire véhicule #}
                <div class=\"box box-success\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations véhicule</h3>
                    </div>
    
                    <div class=\"box-body\" id=\"form-vehicule\">
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.ctGenre) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcType) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.ctMarque) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcNumSerie) }}
                        {{ form_row(edit_form.ctCarteGrise.ctCarosserie) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcNumMoteur) }}
                        {{ form_row(edit_form.ctCarteGrise.ctSourceEnergie) }}
                        {{ form_row(edit_form.ctCarteGrise.cgPuissanceAdmin) }}
                        {{ form_row(edit_form.ctCarteGrise.cgNbrAssis) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcPoidsTotalCharge) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcPoidsVide) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcChargeUtile) }}
                        {{ form_row(edit_form.ctCarteGrise.cgMiseEnService, {
                            'attr': {
                                'class': ' datepicker-edit'
                            }})
                        }}
                    </div>

                    {# Champs cachés #}
                    <div class=\"hidden\">
                        <input type=\"text\" name=\"ct-visite-id\" id=\"ct-visite-id\" value=\"{{ visite.id }}\" />
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcPuissance) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcCylindre) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcHauteur) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcLongueur) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcLargeur) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcProvenance) }}
                        {{ form_row(edit_form.ctCarteGrise.cgNbrDebout) }}
                        <hr>
                        {{ form_row(edit_form.ctCarteGrise.cgRta) }}
                        {{ form_row(edit_form.ctCarteGrise.cgPatente) }}
                        {{ form_row(edit_form.ctCarteGrise.cgAni) }}
                        <hr>
                        {{ form_row(edit_form.ctCarteGrise.cgNumCarteViolette) }}
                        {{ form_row(edit_form.ctCarteGrise.cgLieuCarteViolette) }}
                        {{ form_row(edit_form.ctCarteGrise.cgDateCarteViolette) }}
                        <hr>
                        {{ form_row(edit_form.ctCarteGrise.cgDateVignette) }}
                        {{ form_row(edit_form.ctCarteGrise.cgLieuVignette) }}
                    </div>
                </div>
            </div>
    
            {# Formulaire visite #}
            <div class=\"col-md-6\">
                <div class=\"box box-primary\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations visite technique</h3>
                    </div>
    
                    <div class=\"box-body\">
                        <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                            {{ form_row(edit_form.ctCentre) }}
                        </div>
                        {{ form_row(edit_form.ctTypeVisite) }}
                        <hr>
                        {{ form_row(edit_form.ctUsage) }}
                        {{ form_row(edit_form.ctUtilisation) }}
                        {{ form_row(edit_form.ctAnomalie) }}
                        <div id=\"form-duree-reparation\" class=\"{% if visite.ctAnomalie|length == 0 %}hidden{% endif %}\">
                            {{ form_row(edit_form.vstDureeReparation) }}
                        </div>
                        {{ form_row(edit_form.vstDateExpiration) }}
                        {{ form_row(edit_form.ctVerificateur) }}
                        {{ form_row(edit_form.ctVisiteExtra) }}
                    </div>
                </div>
                
                {# {% if adesit == true %}            
                <!-- Informations des imprimés utilisés -->
                <div class=\"box box-warning\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations imprimés techniques utilisés</h3>
                    </div>
                    <div class=\"row\">
                        <div class=\"box-body\">
                            <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                <label for=\"ct_imprime_tech_use\">Séléctionner les N° imprimés utilisés</label>
                                <select id=\"ct_imprime_tech_use\" name=\"ct_imprime_tech_use[]\" class=\"form-control select2 mx-6\"
                                    style=\"width: 100%;\" data-placeholder=\" Choisir\" multiple=\"\" required >
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
                {% endif %} #}
            </div>
        </div>
    
        {# Formulaire enregistrement #}
        <div class=\"row\">
            <div class=\"box box-success\">
                <div class=\"box-body\">
                    <div class=\"col-md-4\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite\"/>
                        <a href=\"{{ path('visite_new') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à l'ajout
                        </a>
                    </div>
                    <div class=\"col-md-4\">
                        <input type=\"button\" class=\"btn btn-success\" id=\"btn-generate-reporting\"
                               value=\"Générer la carte visite\" name=\"generate_carte_visite\"/>
                        <span class=\"kl-edit-link-download-cv\" id=\"link-download\"></span>
                    </div>
                    <div class=\"col-md-4\">
                        <input type=\"button\" class=\"btn btn-primary\" id=\"btn-generate-pv-visite\"
                               value=\"Générer PV\" name=\"generate_pv_visite\"/>
                        <span class=\"kl-edit-link-download-pv\" id=\"link-download-pv\"></span>
                        {#<span class=\"kl-edit-link-download-pv\" id=\"link-download-pv-inapte\"></span>#}
                    </div>
                </div>
            </div>
        </div>
    {{ form_end(edit_form) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}


    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>
    <script>
        \$(\".ct_imprime_tech_use\").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
        var _fill_form_carte_grise_ajax_uri = \"{{ path('carte_grise_fill_info_by_immatriculation_ajax') }}\";
        var _autocomplete_numero_serie_ajax_uri = \"{{ path('carte_grise_show_numero_serie_ajax') }}\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"{{ path('carte_grise_show_numero_immatriculation_ajax') }}\";
        var _generate_reporting_ajax_uri = \"{{ path('visite_generate_reporting_ajax') }}\";
        var _generate_pv_visite_ajax_uri = \"{{ path('visite_generate_pv_visite_ajax') }}\"
        var _select_verif_by_centre_ajax_uri = \"{{ path('visite_select_verificateur_by_centre_ajax') }}\";
        var _select_usage_by_type_visite_ajax_uri = \"{{ path('visite_select_usage_by_type_visite_ajax') }}\";
        var _select_expiration_by_usage_ajax_uri = \"{{ path('visite_select_expiration_by_usage_ajax') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/add.visite.js') }}\"></script>
{% endblock %}", "@Admin/CtVisite/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisite\\edit.html.twig");
    }
}
