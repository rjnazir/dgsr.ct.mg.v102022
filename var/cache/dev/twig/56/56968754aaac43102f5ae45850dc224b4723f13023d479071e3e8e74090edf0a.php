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
        $__internal_26de114fc3c39e9301364e3686c3781a62f2311e7ee266d424f30725cce6fa09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26de114fc3c39e9301364e3686c3781a62f2311e7ee266d424f30725cce6fa09->enter($__internal_26de114fc3c39e9301364e3686c3781a62f2311e7ee266d424f30725cce6fa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtReception:edit.html.twig"));

        $__internal_b977e56778248e322297154707458eb59f8d25be4d35cd75e48eb71eb047261f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b977e56778248e322297154707458eb59f8d25be4d35cd75e48eb71eb047261f->enter($__internal_b977e56778248e322297154707458eb59f8d25be4d35cd75e48eb71eb047261f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtReception:edit.html.twig"));

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
        
        $__internal_26de114fc3c39e9301364e3686c3781a62f2311e7ee266d424f30725cce6fa09->leave($__internal_26de114fc3c39e9301364e3686c3781a62f2311e7ee266d424f30725cce6fa09_prof);

        
        $__internal_b977e56778248e322297154707458eb59f8d25be4d35cd75e48eb71eb047261f->leave($__internal_b977e56778248e322297154707458eb59f8d25be4d35cd75e48eb71eb047261f_prof);

    }

    // line 14
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_121520a2f7e444c48218d23ad268169ec0db873bd026b63bda89fe7d31ed4112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121520a2f7e444c48218d23ad268169ec0db873bd026b63bda89fe7d31ed4112->enter($__internal_121520a2f7e444c48218d23ad268169ec0db873bd026b63bda89fe7d31ed4112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_465666004a1f7bfe097f289911576f2a5b6c42d53a5eb30cc1a31842a15f9cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465666004a1f7bfe097f289911576f2a5b6c42d53a5eb30cc1a31842a15f9cca->enter($__internal_465666004a1f7bfe097f289911576f2a5b6c42d53a5eb30cc1a31842a15f9cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_465666004a1f7bfe097f289911576f2a5b6c42d53a5eb30cc1a31842a15f9cca->leave($__internal_465666004a1f7bfe097f289911576f2a5b6c42d53a5eb30cc1a31842a15f9cca_prof);

        
        $__internal_121520a2f7e444c48218d23ad268169ec0db873bd026b63bda89fe7d31ed4112->leave($__internal_121520a2f7e444c48218d23ad268169ec0db873bd026b63bda89fe7d31ed4112_prof);

    }

    // line 39
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09ab858d4e6710ea68303800a2f38bd8816535fbd3aeea9bde2c6674a2948898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ab858d4e6710ea68303800a2f38bd8816535fbd3aeea9bde2c6674a2948898->enter($__internal_09ab858d4e6710ea68303800a2f38bd8816535fbd3aeea9bde2c6674a2948898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ed5a9709b7b83f0c98921b0b9b2fa30304f4e51cd6608769b436ad297ba37064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5a9709b7b83f0c98921b0b9b2fa30304f4e51cd6608769b436ad297ba37064->enter($__internal_ed5a9709b7b83f0c98921b0b9b2fa30304f4e51cd6608769b436ad297ba37064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ed5a9709b7b83f0c98921b0b9b2fa30304f4e51cd6608769b436ad297ba37064->leave($__internal_ed5a9709b7b83f0c98921b0b9b2fa30304f4e51cd6608769b436ad297ba37064_prof);

        
        $__internal_09ab858d4e6710ea68303800a2f38bd8816535fbd3aeea9bde2c6674a2948898->leave($__internal_09ab858d4e6710ea68303800a2f38bd8816535fbd3aeea9bde2c6674a2948898_prof);

    }

    // line 46
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7a6e0a6b8bda98b4697d25411035281fd7f137c48e4aa96a59a18b6af7025a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a6e0a6b8bda98b4697d25411035281fd7f137c48e4aa96a59a18b6af7025a5->enter($__internal_f7a6e0a6b8bda98b4697d25411035281fd7f137c48e4aa96a59a18b6af7025a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2b57cf3c54e1ca356d1980f73204ad577f73243aebab5a4b9141d2b3e9a2d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b57cf3c54e1ca356d1980f73204ad577f73243aebab5a4b9141d2b3e9a2d9c->enter($__internal_e2b57cf3c54e1ca356d1980f73204ad577f73243aebab5a4b9141d2b3e9a2d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Réception ";
        
        $__internal_e2b57cf3c54e1ca356d1980f73204ad577f73243aebab5a4b9141d2b3e9a2d9c->leave($__internal_e2b57cf3c54e1ca356d1980f73204ad577f73243aebab5a4b9141d2b3e9a2d9c_prof);

        
        $__internal_f7a6e0a6b8bda98b4697d25411035281fd7f137c48e4aa96a59a18b6af7025a5->leave($__internal_f7a6e0a6b8bda98b4697d25411035281fd7f137c48e4aa96a59a18b6af7025a5_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_399dc04addd39bd47989992e691376e8a0d2976b56782298244433b5bd5cabbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399dc04addd39bd47989992e691376e8a0d2976b56782298244433b5bd5cabbe->enter($__internal_399dc04addd39bd47989992e691376e8a0d2976b56782298244433b5bd5cabbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4d515a66751665a35752f6905cb070698715dbd18ca1e38a85e432d04cd159d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d515a66751665a35752f6905cb070698715dbd18ca1e38a85e432d04cd159d->enter($__internal_b4d515a66751665a35752f6905cb070698715dbd18ca1e38a85e432d04cd159d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b4d515a66751665a35752f6905cb070698715dbd18ca1e38a85e432d04cd159d->leave($__internal_b4d515a66751665a35752f6905cb070698715dbd18ca1e38a85e432d04cd159d_prof);

        
        $__internal_399dc04addd39bd47989992e691376e8a0d2976b56782298244433b5bd5cabbe->leave($__internal_399dc04addd39bd47989992e691376e8a0d2976b56782298244433b5bd5cabbe_prof);

    }

    // line 199
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d9555783883fea61287cd4b915808b2b25d1f51c4f77229b3c04e38ab35eb9a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9555783883fea61287cd4b915808b2b25d1f51c4f77229b3c04e38ab35eb9a9->enter($__internal_d9555783883fea61287cd4b915808b2b25d1f51c4f77229b3c04e38ab35eb9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2a97527045c0645453299a3233b295204d402ea5a9fa7dec654df65087adafd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a97527045c0645453299a3233b295204d402ea5a9fa7dec654df65087adafd3->enter($__internal_2a97527045c0645453299a3233b295204d402ea5a9fa7dec654df65087adafd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2a97527045c0645453299a3233b295204d402ea5a9fa7dec654df65087adafd3->leave($__internal_2a97527045c0645453299a3233b295204d402ea5a9fa7dec654df65087adafd3_prof);

        
        $__internal_d9555783883fea61287cd4b915808b2b25d1f51c4f77229b3c04e38ab35eb9a9->leave($__internal_d9555783883fea61287cd4b915808b2b25d1f51c4f77229b3c04e38ab35eb9a9_prof);

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
