<?php

/* AdminBundle:CtReception:edit.html.twig */
class __TwigTemplate_ef7643cc44c9ccebe3eee8f27d5acd8f72157326c2dd71860c0c7c23a0e1e04d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtReception:edit.html.twig", 1);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_1c83a431c5338d6065ab3a52f92a48feebcd522de5a69b08d95d5e9c858f437a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c83a431c5338d6065ab3a52f92a48feebcd522de5a69b08d95d5e9c858f437a->enter($__internal_1c83a431c5338d6065ab3a52f92a48feebcd522de5a69b08d95d5e9c858f437a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtReception:edit.html.twig"));

        $__internal_d8194d67dcb049e16f5866e53f5de567fa5a58a153466068936608b83417aa9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8194d67dcb049e16f5866e53f5de567fa5a58a153466068936608b83417aa9d->enter($__internal_d8194d67dcb049e16f5866e53f5de567fa5a58a153466068936608b83417aa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtReception:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:fields.html.twig"));
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "ctGenre", array()), array(0 => $this));
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "ctMarque", array()), array(0 => $this));
        // line 9
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctSourceEnergie", array()), array(0 => $this));
        // line 10
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarosserie", array()), array(0 => $this));
        // line 11
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctMotif", array()), array(0 => $this));
        // line 12
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUtilisation", array()), array(0 => $this));
        // line 48
        $context["menu_reception"] = true;
        // line 49
        $context["menu_reception_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c83a431c5338d6065ab3a52f92a48feebcd522de5a69b08d95d5e9c858f437a->leave($__internal_1c83a431c5338d6065ab3a52f92a48feebcd522de5a69b08d95d5e9c858f437a_prof);

        
        $__internal_d8194d67dcb049e16f5866e53f5de567fa5a58a153466068936608b83417aa9d->leave($__internal_d8194d67dcb049e16f5866e53f5de567fa5a58a153466068936608b83417aa9d_prof);

    }

    // line 14
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_8d069976ed12adc0cd99a3162708fa45cb24e4c948a81aa542ddb15692ea893e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d069976ed12adc0cd99a3162708fa45cb24e4c948a81aa542ddb15692ea893e->enter($__internal_8d069976ed12adc0cd99a3162708fa45cb24e4c948a81aa542ddb15692ea893e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1df5dbee796046acf257dd877d488c3626ab84342c4b3d7f55fa0eb56ba0dbe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df5dbee796046acf257dd877d488c3626ab84342c4b3d7f55fa0eb56ba0dbe3->enter($__internal_1df5dbee796046acf257dd877d488c3626ab84342c4b3d7f55fa0eb56ba0dbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 15
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 16
            $context["required"] = false;
        }
        // line 18
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 20
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 21
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 22
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 23
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 26
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 27
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 28
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 29
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 30
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 33
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 34
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 35
        echo "</select>
    </span>";
        
        $__internal_1df5dbee796046acf257dd877d488c3626ab84342c4b3d7f55fa0eb56ba0dbe3->leave($__internal_1df5dbee796046acf257dd877d488c3626ab84342c4b3d7f55fa0eb56ba0dbe3_prof);

        
        $__internal_8d069976ed12adc0cd99a3162708fa45cb24e4c948a81aa542ddb15692ea893e->leave($__internal_8d069976ed12adc0cd99a3162708fa45cb24e4c948a81aa542ddb15692ea893e_prof);

    }

    // line 39
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_006fd1871625bf088efab200febc63e2e86e63fffea99adeca1848973d40cda0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006fd1871625bf088efab200febc63e2e86e63fffea99adeca1848973d40cda0->enter($__internal_006fd1871625bf088efab200febc63e2e86e63fffea99adeca1848973d40cda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_950301901e8fe3e14452d87da7a900a2abc3668550848145fbdce66fa959bd73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950301901e8fe3e14452d87da7a900a2abc3668550848145fbdce66fa959bd73->enter($__internal_950301901e8fe3e14452d87da7a900a2abc3668550848145fbdce66fa959bd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 40
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"Stylesheet\"></link>
";
        
        $__internal_950301901e8fe3e14452d87da7a900a2abc3668550848145fbdce66fa959bd73->leave($__internal_950301901e8fe3e14452d87da7a900a2abc3668550848145fbdce66fa959bd73_prof);

        
        $__internal_006fd1871625bf088efab200febc63e2e86e63fffea99adeca1848973d40cda0->leave($__internal_006fd1871625bf088efab200febc63e2e86e63fffea99adeca1848973d40cda0_prof);

    }

    // line 46
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e183578984e0467cec07b95e2553004c1ef3b5e98a509df9cde16ea9446d88b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e183578984e0467cec07b95e2553004c1ef3b5e98a509df9cde16ea9446d88b->enter($__internal_5e183578984e0467cec07b95e2553004c1ef3b5e98a509df9cde16ea9446d88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_134a6d5d3b80bf9073bdea0d0d22e67b5e9b9c4e79a885f4842cfca39cd213ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134a6d5d3b80bf9073bdea0d0d22e67b5e9b9c4e79a885f4842cfca39cd213ba->enter($__internal_134a6d5d3b80bf9073bdea0d0d22e67b5e9b9c4e79a885f4842cfca39cd213ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Réception ";
        
        $__internal_134a6d5d3b80bf9073bdea0d0d22e67b5e9b9c4e79a885f4842cfca39cd213ba->leave($__internal_134a6d5d3b80bf9073bdea0d0d22e67b5e9b9c4e79a885f4842cfca39cd213ba_prof);

        
        $__internal_5e183578984e0467cec07b95e2553004c1ef3b5e98a509df9cde16ea9446d88b->leave($__internal_5e183578984e0467cec07b95e2553004c1ef3b5e98a509df9cde16ea9446d88b_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec8dd4201c30cfac01cd321a88b076ff3277bfb00faa39b982aeba9444680888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8dd4201c30cfac01cd321a88b076ff3277bfb00faa39b982aeba9444680888->enter($__internal_ec8dd4201c30cfac01cd321a88b076ff3277bfb00faa39b982aeba9444680888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c840ff738cdb92df2580c17ac1321c566652fbe32b7834ab2f10651089d7f5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c840ff738cdb92df2580c17ac1321c566652fbe32b7834ab2f10651089d7f5bb->enter($__internal_c840ff738cdb92df2580c17ac1321c566652fbe32b7834ab2f10651089d7f5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 53
            echo "        <div class=\"callout callout-success\">
            ";
            // line 54
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 58
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 59
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading text-center\"><h3>Modifier Réception ";
        // line 63
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["rec_type"] ?? $this->getContext($context, "rec_type"))), "html", null, true);
        echo "</h3></div>
        <div class=\"panel-body\">
            <div class=\"row\">
                ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 68
        echo "                <div class=\"col-md-6\">
                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations véhicule</h3>
                        </div>

                        <div class=\"box-body\">
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcType", array()), 'row');
        echo "
                            <div class=\"form-group\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcNumSerie", array()), 'label', array("label" => "Numero Serie"));
        echo "
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcNumSerie", array()), 'widget', array("attr" => array("class" => "form-control", "ajax-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_autocomplete_vehicule"))));
        // line 84
        echo "
                            </div>
                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcNumMoteur", array()), 'row');
        echo "
                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "rcpImmatriculation", array()), 'row');
        echo "
                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "ctGenre", array()), 'row');
        echo "
                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "ctMarque", array()), 'row');
        echo "
                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcCylindre", array()), 'row');
        echo "
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcPuissance", array()), 'row');
        echo "
                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcChargeUtile", array()), 'row');
        echo "
                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcPoidsVide", array()), 'row');
        echo "
                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcPoidsTotalCharge", array()), 'row');
        echo "
                            <div class=\"hidden\">
                                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcHauteur", array()), 'row');
        echo "
                                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcLongueur", array()), 'row');
        echo "
                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcLargeur", array()), 'row');
        echo "
                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcProvenance", array()), 'row');
        echo "
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 106
        echo "                <div class=\"col-md-6\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations réception</h3>
                        </div>

                        <div class=\"box-body\">
                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctSourceEnergie", array()), 'row');
        echo "
                            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarosserie", array()), 'row');
        echo "
                            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "rcpNbrAssis", array()), 'row');
        echo "
                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "rcpNbrDebout", array()), 'row');
        echo "
                            ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "rcpMiseService", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 120
        echo "
                            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctMotif", array()), 'row');
        echo "
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "rcpProprietaire", array()), 'row');
        echo "
                            ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "rcpAdresse", array()), 'row');
        echo "
                            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "rcpProfession", array()), 'row');
        echo "
                            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUtilisation", array()), 'row');
        echo "
                        </div>
";
        // line 138
        echo "
                    </div>

                    ";
        // line 176
        echo "
                    <div class=\"box-footer\">
                        <div class=\"box-footer\">
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_reception\"/>
                            <a href=\"";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_index");
        echo "\"
                            class=\"btn btn-default pull-left btn-mini-rectif\" >
                                Retour à la liste
                            </a>
                            <a href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_pv", array("id" => $this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "id", array()))), "html", null, true);
        echo "\"
                            class=\"btn btn-warning\" target=\"_blank\">
                                Générer PV
                            </a>
                        </div>
                    </div>
                </div>
                ";
        // line 191
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>

        </div>
    </div>

";
        
        $__internal_c840ff738cdb92df2580c17ac1321c566652fbe32b7834ab2f10651089d7f5bb->leave($__internal_c840ff738cdb92df2580c17ac1321c566652fbe32b7834ab2f10651089d7f5bb_prof);

        
        $__internal_ec8dd4201c30cfac01cd321a88b076ff3277bfb00faa39b982aeba9444680888->leave($__internal_ec8dd4201c30cfac01cd321a88b076ff3277bfb00faa39b982aeba9444680888_prof);

    }

    // line 199
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cab5b160997b354dd23f87e93e5fd74911cb73bdd73cbbe1c366f8a918595693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab5b160997b354dd23f87e93e5fd74911cb73bdd73cbbe1c366f8a918595693->enter($__internal_cab5b160997b354dd23f87e93e5fd74911cb73bdd73cbbe1c366f8a918595693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cbd35f312ea24bfacbf6400d80d144755bc8b3dd99d62d2d302c689a0be1b3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd35f312ea24bfacbf6400d80d144755bc8b3dd99d62d2d302c689a0be1b3e2->enter($__internal_cbd35f312ea24bfacbf6400d80d144755bc8b3dd99d62d2d302c689a0be1b3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 200
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>

    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/edit.reception.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_cbd35f312ea24bfacbf6400d80d144755bc8b3dd99d62d2d302c689a0be1b3e2->leave($__internal_cbd35f312ea24bfacbf6400d80d144755bc8b3dd99d62d2d302c689a0be1b3e2_prof);

        
        $__internal_cab5b160997b354dd23f87e93e5fd74911cb73bdd73cbbe1c366f8a918595693->leave($__internal_cab5b160997b354dd23f87e93e5fd74911cb73bdd73cbbe1c366f8a918595693_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtReception:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 205,  427 => 203,  420 => 200,  411 => 199,  394 => 191,  384 => 184,  377 => 180,  371 => 176,  366 => 138,  361 => 125,  357 => 124,  353 => 123,  349 => 122,  345 => 121,  342 => 120,  340 => 117,  336 => 116,  332 => 115,  328 => 114,  324 => 113,  315 => 106,  306 => 99,  302 => 98,  298 => 97,  294 => 96,  289 => 94,  285 => 93,  281 => 92,  277 => 91,  273 => 90,  269 => 89,  265 => 88,  261 => 87,  257 => 86,  253 => 84,  251 => 78,  247 => 77,  242 => 75,  233 => 68,  229 => 66,  223 => 63,  220 => 62,  211 => 59,  208 => 58,  203 => 57,  194 => 54,  191 => 53,  186 => 52,  177 => 51,  158 => 46,  146 => 43,  139 => 40,  130 => 39,  119 => 35,  117 => 34,  115 => 33,  109 => 30,  107 => 29,  105 => 28,  103 => 27,  101 => 26,  96 => 23,  89 => 22,  87 => 21,  81 => 20,  77 => 18,  74 => 16,  72 => 15,  63 => 14,  53 => 1,  51 => 49,  49 => 48,  47 => 12,  45 => 11,  43 => 10,  41 => 9,  39 => 8,  37 => 6,  35 => 3,  11 => 1,);
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

{#{% form_theme edit_form.ctCentre _self %}#}
{% form_theme edit_form.ctVehicule.ctGenre _self %}
{#{% form_theme edit_form.ctTypeReception _self %}#}
{% form_theme edit_form.ctVehicule.ctMarque _self %}
{% form_theme edit_form.ctSourceEnergie _self %}
{% form_theme edit_form.ctCarosserie _self %}
{% form_theme edit_form.ctMotif _self %}
{% form_theme edit_form.ctUtilisation _self %}

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

{% block stylesheets %}
    {{ parent() }}

    <!-- JQuery UI -->
    <link href=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.css') }}\" rel=\"Stylesheet\"></link>
{% endblock %}

{% block title %}{{ parent() }} Modification Réception {% endblock %}

{% set menu_reception             = true %}
{% set menu_reception_create = true %}

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
        <div class=\"panel-heading text-center\"><h3>Modifier Réception {{ rec_type|capitalize }}</h3></div>
        <div class=\"panel-body\">
            <div class=\"row\">
                {{ form_start(edit_form) }}
                {# Formulaire véhicule #}
                <div class=\"col-md-6\">
                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations véhicule</h3>
                        </div>

                        <div class=\"box-body\">
                            {{ form_row(edit_form.ctVehicule.vhcType) }}
                            <div class=\"form-group\">
                                {{ form_label(edit_form.ctVehicule.vhcNumSerie, 'Numero Serie') }}
                                {{ form_widget(edit_form.ctVehicule.vhcNumSerie, {
                                    'attr': {
                                        'class': 'form-control',
                                        'ajax-url': path('reception_autocomplete_vehicule')
                                    }
                                }
                                )}}
                            </div>
                            {{ form_row(edit_form.ctVehicule.vhcNumMoteur) }}
                            {{ form_row(edit_form.rcpImmatriculation) }}
                            {{ form_row(edit_form.ctVehicule.ctGenre) }}
                            {{ form_row(edit_form.ctVehicule.ctMarque) }}
                            {{ form_row(edit_form.ctVehicule.vhcCylindre) }}
                            {{ form_row(edit_form.ctVehicule.vhcPuissance) }}
                            {{ form_row(edit_form.ctVehicule.vhcChargeUtile) }}
                            {{ form_row(edit_form.ctVehicule.vhcPoidsVide) }}
                            {{ form_row(edit_form.ctVehicule.vhcPoidsTotalCharge) }}
                            <div class=\"hidden\">
                                {{ form_row(edit_form.ctVehicule.vhcHauteur) }}
                                {{ form_row(edit_form.ctVehicule.vhcLongueur) }}
                                {{ form_row(edit_form.ctVehicule.vhcLargeur) }}
                                {{ form_row(edit_form.ctVehicule.vhcProvenance) }}
                            </div>
                        </div>
                    </div>
                </div>

                {# Formulaire Reception #}
                <div class=\"col-md-6\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations réception</h3>
                        </div>

                        <div class=\"box-body\">
                            {{ form_row(edit_form.ctSourceEnergie) }}
                            {{ form_row(edit_form.ctCarosserie) }}
                            {{ form_row(edit_form.rcpNbrAssis) }}
                            {{ form_row(edit_form.rcpNbrDebout) }}
                            {{ form_row(edit_form.rcpMiseService, {
                                'attr': {
                                    'class': ' datepicker-edit'
                                }}) }}
                            {{ form_row(edit_form.ctMotif) }}
                            {{ form_row(edit_form.rcpProprietaire) }}
                            {{ form_row(edit_form.rcpAdresse) }}
                            {{ form_row(edit_form.rcpProfession) }}
                            {{ form_row(edit_form.ctUtilisation) }}
                        </div>
{#                         <div class=\"box-footer\">
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_reception\"/>
                            <a href=\"{{ path('reception_index') }}\"
                               class=\"btn btn-default pull-left btn-mini-rectif\" >
                                Retour à la liste
                            </a>
                            <a href=\"{{ path('reception_generer_pv', { 'id': reception.id }) }}\"
                               class=\"btn btn-warning\" target=\"_blank\">
                                Générer PV
                            </a>
                        </div> #}

                    </div>

                    {# {% if adesit == true %}
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
                    {% endif %} #}

                    <div class=\"box-footer\">
                        <div class=\"box-footer\">
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_reception\"/>
                            <a href=\"{{ path('reception_index') }}\"
                            class=\"btn btn-default pull-left btn-mini-rectif\" >
                                Retour à la liste
                            </a>
                            <a href=\"{{ path('reception_generer_pv', { 'id': reception.id }) }}\"
                            class=\"btn btn-warning\" target=\"_blank\">
                                Générer PV
                            </a>
                        </div>
                    </div>
                </div>
                {{ form_end(edit_form) }}
            </div>

        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>

    <script src=\"{{ asset('backoffice/js/edit.reception.js') }}\"></script>
{% endblock %}", "AdminBundle:CtReception:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtReception/edit.html.twig");
    }
}
