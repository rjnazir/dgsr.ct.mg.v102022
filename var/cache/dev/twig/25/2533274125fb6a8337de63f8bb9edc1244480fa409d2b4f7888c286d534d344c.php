<?php

/* @Admin/CtReception/add.html.twig */
class __TwigTemplate_c58026f7775d71a0fbdf070860d34c59e0818a3547ec1647d6af961c4e41a451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtReception/add.html.twig", 1);
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
        $__internal_9771aed8d0688e5b63d6628afb23f88d5a7096d865cdc15f954d4042dc613875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9771aed8d0688e5b63d6628afb23f88d5a7096d865cdc15f954d4042dc613875->enter($__internal_9771aed8d0688e5b63d6628afb23f88d5a7096d865cdc15f954d4042dc613875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/add.html.twig"));

        $__internal_2668ea2b3cdb1bd42ff619edf794208743854c5c3b1fd00aa2b40aa8ca0960d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2668ea2b3cdb1bd42ff619edf794208743854c5c3b1fd00aa2b40aa8ca0960d9->enter($__internal_2668ea2b3cdb1bd42ff619edf794208743854c5c3b1fd00aa2b40aa8ca0960d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/add.html.twig"));

        // line 3
        if ((( !array_key_exists("show_first_page", $context) &&  !array_key_exists("is_stop", $context)) || (array_key_exists("is_stop", $context) && (($context["is_stop"] ?? $this->getContext($context, "is_stop")) == false)))) {
            // line 5
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:fields.html.twig"));
            // line 8
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "ctGenre", array()), array(0 => $this));
            // line 10
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "ctMarque", array()), array(0 => $this));
            // line 11
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctSourceEnergie", array()), array(0 => $this));
            // line 12
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarosserie", array()), array(0 => $this));
            // line 13
            if ((array_key_exists("rec_type", $context) && (($context["rec_type"] ?? $this->getContext($context, "rec_type")) == "isole"))) {
                // line 14
                $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctMotif", array()), array(0 => $this));
            }
            // line 16
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctUtilisation", array()), array(0 => $this));
        }
        // line 54
        $context["menu_reception"] = true;
        // line 55
        $context["menu_reception_create"] = true;
        // line 56
        $context["menu_reception_create_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9771aed8d0688e5b63d6628afb23f88d5a7096d865cdc15f954d4042dc613875->leave($__internal_9771aed8d0688e5b63d6628afb23f88d5a7096d865cdc15f954d4042dc613875_prof);

        
        $__internal_2668ea2b3cdb1bd42ff619edf794208743854c5c3b1fd00aa2b40aa8ca0960d9->leave($__internal_2668ea2b3cdb1bd42ff619edf794208743854c5c3b1fd00aa2b40aa8ca0960d9_prof);

    }

    // line 20
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_10f1c79c9d71e4a00299e45979af783d3d9c8caf413d10b45fc6602c2d07f056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f1c79c9d71e4a00299e45979af783d3d9c8caf413d10b45fc6602c2d07f056->enter($__internal_10f1c79c9d71e4a00299e45979af783d3d9c8caf413d10b45fc6602c2d07f056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_b8f13f8a19a8e481205986beea08dd506a3b4b53a6d2c25e81967decf8355949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f13f8a19a8e481205986beea08dd506a3b4b53a6d2c25e81967decf8355949->enter($__internal_b8f13f8a19a8e481205986beea08dd506a3b4b53a6d2c25e81967decf8355949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 21
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 22
            $context["required"] = false;
        }
        // line 24
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 26
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 27
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 28
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 29
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 32
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 33
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 34
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 35
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 36
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 39
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 40
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 41
        echo "</select>
    </span>";
        
        $__internal_b8f13f8a19a8e481205986beea08dd506a3b4b53a6d2c25e81967decf8355949->leave($__internal_b8f13f8a19a8e481205986beea08dd506a3b4b53a6d2c25e81967decf8355949_prof);

        
        $__internal_10f1c79c9d71e4a00299e45979af783d3d9c8caf413d10b45fc6602c2d07f056->leave($__internal_10f1c79c9d71e4a00299e45979af783d3d9c8caf413d10b45fc6602c2d07f056_prof);

    }

    // line 45
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a382d51f5342ba068d86079a412696b522565411a11b439efded1559d8a886a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a382d51f5342ba068d86079a412696b522565411a11b439efded1559d8a886a7->enter($__internal_a382d51f5342ba068d86079a412696b522565411a11b439efded1559d8a886a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b7d3b28706aac4e9b0a5073efb2a26ddeb3ea807dd57c898fe9a5220e74e76ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d3b28706aac4e9b0a5073efb2a26ddeb3ea807dd57c898fe9a5220e74e76ae->enter($__internal_b7d3b28706aac4e9b0a5073efb2a26ddeb3ea807dd57c898fe9a5220e74e76ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 46
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"Stylesheet\"></link>
";
        
        $__internal_b7d3b28706aac4e9b0a5073efb2a26ddeb3ea807dd57c898fe9a5220e74e76ae->leave($__internal_b7d3b28706aac4e9b0a5073efb2a26ddeb3ea807dd57c898fe9a5220e74e76ae_prof);

        
        $__internal_a382d51f5342ba068d86079a412696b522565411a11b439efded1559d8a886a7->leave($__internal_a382d51f5342ba068d86079a412696b522565411a11b439efded1559d8a886a7_prof);

    }

    // line 52
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ae529070f424bdad9c973f7ad929afd6355558fad083a73fb039a4b3db28023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae529070f424bdad9c973f7ad929afd6355558fad083a73fb039a4b3db28023->enter($__internal_3ae529070f424bdad9c973f7ad929afd6355558fad083a73fb039a4b3db28023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9b4a7dd73943fcade315871b6eb9a9d4d01c7ad6f9e884d8d44e00e81330f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b4a7dd73943fcade315871b6eb9a9d4d01c7ad6f9e884d8d44e00e81330f61->enter($__internal_b9b4a7dd73943fcade315871b6eb9a9d4d01c7ad6f9e884d8d44e00e81330f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Réception ";
        
        $__internal_b9b4a7dd73943fcade315871b6eb9a9d4d01c7ad6f9e884d8d44e00e81330f61->leave($__internal_b9b4a7dd73943fcade315871b6eb9a9d4d01c7ad6f9e884d8d44e00e81330f61_prof);

        
        $__internal_3ae529070f424bdad9c973f7ad929afd6355558fad083a73fb039a4b3db28023->leave($__internal_3ae529070f424bdad9c973f7ad929afd6355558fad083a73fb039a4b3db28023_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3710a91c6017b9f6fd8f89e20af87a7657b54a7779f8dcaa3d080c3e0d5c576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3710a91c6017b9f6fd8f89e20af87a7657b54a7779f8dcaa3d080c3e0d5c576->enter($__internal_a3710a91c6017b9f6fd8f89e20af87a7657b54a7779f8dcaa3d080c3e0d5c576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e97c07938cbcd167a0f4f3b45a57e77e1f57aeb285ffdff0621861f3622bbb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97c07938cbcd167a0f4f3b45a57e77e1f57aeb285ffdff0621861f3622bbb52->enter($__internal_e97c07938cbcd167a0f4f3b45a57e77e1f57aeb285ffdff0621861f3622bbb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 60
            echo "        <div class=\"callout callout-success\">
            ";
            // line 61
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 65
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 66
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
    ";
        // line 70
        if (((array_key_exists("is_stop", $context) && (($context["is_stop"] ?? $this->getContext($context, "is_stop")) == true)) && array_key_exists("id_recep", $context))) {
            // line 71
            echo "        <div style=\"text-align: center\">
            <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_pv", array("id" => ($context["id_recep"] ?? $this->getContext($context, "id_recep")))), "html", null, true);
            echo "\"
               class=\"btn btn-primary btn-lg\" target=\"_blank\">
                Générer PV
            </a>
        </div>
    ";
        } else {
            // line 78
            echo "        ";
            if (array_key_exists("show_first_page", $context)) {
                // line 79
                echo "            <div class=\"row\">
                <div class=\"col-md-6\" id=\"id-choix-reception\">
                    <div class=\"box box-success\">
                        <div class=\"box-header text-center\">
                            <h3 class=\"box-title\">Nouvelle réception</h3>
                        </div>
                        <form name=\"nb_vehicule\" id=\"nb_vehicule\" action=\"";
                // line 85
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_new");
                echo "\" method=\"post\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6 col-md-6 col-lg-4\">
                                            <select class=\"form-control\" data-placeholder=\"Choisir\" id=\"select-type\">
                                                <option value=\"\" selected=\"selected\">
                                                    Choisir
                                                </option>
                                                ";
                // line 94
                if (($context["type_receptions"] ?? $this->getContext($context, "type_receptions"))) {
                    // line 95
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["type_receptions"] ?? $this->getContext($context, "type_receptions")));
                    foreach ($context['_seq'] as $context["_key"] => $context["rcpt"]) {
                        // line 96
                        echo "                                                        <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rcpt"], "tprcpLibelle", array()), "html", null, true);
                        echo "\">
                                                            ";
                        // line 97
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rcpt"], "tprcpLibelle", array()), "html", null, true);
                        echo "
                                                        </option>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rcpt'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "                                                ";
                }
                // line 101
                echo "
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"creer-form\" class=\"hide\">
                                    <div class=\"form-group\" id=\"nb-vehicule-form\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-6 col-md-6 col-lg-4\">
                                                <input type=\"number\" min=\"1\" id=\"ct_nb_total_vehicule\" name=\"ct_nb_total_vehicule\" class=\"form-control\" value=\"\" oninvalid=\"setErrorClass(\$(this));\"
                                                placeholder=\"Nombre de vehicules\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-6 col-md-6 col-lg-4 text-center\">
                                                <button type=\"submit\" class=\"btn btn-success form-control\" id=\"ct_creer_recep\">Cr&eacute;er</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-md-6\" id=\"id-bilan-reception\">
                    <div class=\"box box-success\">
                        <div class=\"box-header text-center\">
                            <h3 class=\"box-title\">Bilan</h3>
                        </div>
                        <div class=\"box-body\">
                            <div class=\"kl-fdc\">
                                <div class=\"form-group\">
                                    <select required class=\"form-control\" data-placeholder=\"Choisir\" id=\"select-type-bilan\">
                                        <option value=\"\" selected=\"selected\">
                                            Choisir
                                        </option>
                                        ";
                // line 139
                if (($context["type_receptions"] ?? $this->getContext($context, "type_receptions"))) {
                    // line 140
                    echo "                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["type_receptions"] ?? $this->getContext($context, "type_receptions")));
                    foreach ($context['_seq'] as $context["_key"] => $context["rcpt"]) {
                        // line 141
                        echo "                                                <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rcpt"], "id", array()), "html", null, true);
                        echo "\">
                                                    ";
                        // line 142
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rcpt"], "tprcpLibelle", array()), "html", null, true);
                        echo "
                                                </option>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rcpt'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "                                        ";
                }
                // line 146
                echo "
                                    </select>
                                </div>
                                <div class=\"form-group\">
                                <input required type=\"text\" id=\"ct_date_generer\" name=\"ct_date_generer\" class=\"form-control cs-datepicker\">
                                </div>
                                <a href=\"";
                // line 152
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_fdc_rec");
                echo "\"
                                   class=\"btn btn-primary btn-lg\" id=\"ct_link_generer_feuille_caisse\" target=\"_blank\">
                                    Feuille de caisse
                                </a>
                                <a href=\"";
                // line 156
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_fdctrl_rec");
                echo "\"
                                   class=\"btn btn-danger btn-lg\" id=\"ct_link_generer_fiche_controle\" target=\"_blank\">
                                    Fiche de contrôle
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        ";
            } else {
                // line 168
                echo "
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\"><h3>Nouvelle Réception ";
                // line 170
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["rec_type"] ?? $this->getContext($context, "rec_type"))), "html", null, true);
                echo "
                        ";
                // line 171
                if (array_key_exists("nb_vehicule", $context)) {
                    echo "<span class=\"label label-warning\">";
                    if (array_key_exists("num_saisie", $context)) {
                        echo twig_escape_filter($this->env, ($context["num_saisie"] ?? $this->getContext($context, "num_saisie")), "html", null, true);
                    }
                    echo "/";
                    echo twig_escape_filter($this->env, ($context["nb_vehicule"] ?? $this->getContext($context, "nb_vehicule")), "html", null, true);
                    echo " V&eacute;hicules</span>";
                }
                echo "</h3></div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        ";
                // line 174
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
                echo "
                        ";
                // line 176
                echo "                        <div class=\"col-md-6\">
                            <div class=\"box box-success\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\">Informations véhicule</h3>
                                </div>

                                <div class=\"box-body\">
                                    ";
                // line 183
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "ctGenre", array()), 'row');
                echo "
                                    ";
                // line 184
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "ctMarque", array()), 'row');
                echo "
                                    <hr>
                                    ";
                // line 186
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcType", array()), 'row');
                echo "
                                    <div class=\"form-group\">
                                        ";
                // line 188
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcNumSerie", array()), 'label');
                echo "
                                        ";
                // line 189
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcNumSerie", array()), 'widget', array("attr" => array("class" => "form-control", "ajax-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_autocomplete_vehicule"))));
                // line 196
                echo "
                                    </div>
                                    ";
                // line 198
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcNumMoteur", array()), 'row');
                echo "
                                    ";
                // line 199
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarosserie", array()), 'row');
                echo "
                                    ";
                // line 200
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctSourceEnergie", array()), 'row');
                echo "
                                    <hr>
                                    ";
                // line 202
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcCylindre", array()), 'row');
                echo "
                                    ";
                // line 203
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcPuissance", array()), 'row');
                echo "
                                    ";
                // line 204
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcPoidsVide", array()), 'row');
                echo "
                                    ";
                // line 205
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcChargeUtile", array()), 'row');
                echo "
                                    ";
                // line 206
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcPoidsTotalCharge", array()), 'row');
                echo "
                                    ";
                // line 211
                echo "
                                    <div class=\"hidden\">
                                        ";
                // line 215
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcHauteur", array()), 'row');
                echo "
                                        ";
                // line 216
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcLongueur", array()), 'row');
                echo "
                                        ";
                // line 217
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcLargeur", array()), 'row');
                echo "
                                        ";
                // line 218
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcProvenance", array()), 'row');
                echo "
                                    </div>
                                </div>
                            </div>
                        </div>

                        ";
                // line 225
                echo "                        <div class=\"col-md-6\">
                            <div class=\"box box-primary\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\">Informations réception</h3>
                                </div>

                                <div class=\"box-body\">
                                    ";
                // line 232
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctUtilisation", array()), 'row');
                echo "
                                    ";
                // line 233
                if ((array_key_exists("rec_type", $context) && (($context["rec_type"] ?? $this->getContext($context, "rec_type")) == "isole"))) {
                    // line 234
                    echo "                                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctMotif", array()), 'row');
                    echo "
                                    ";
                } else {
                    // line 236
                    echo "                                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctMotif", array()), 'row', array("attr" => array("disabled" => "disabled")));
                    echo "
                                    ";
                }
                // line 238
                echo "                                    <hr>
                                    ";
                // line 239
                if ((array_key_exists("rec_type", $context) && (($context["rec_type"] ?? $this->getContext($context, "rec_type")) == "isole"))) {
                    // line 240
                    echo "                                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rcpImmatriculation", array()), 'row');
                    echo "
                                    ";
                }
                // line 242
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rcpProprietaire", array()), 'row');
                echo "
                                    ";
                // line 243
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rcpProfession", array()), 'row');
                echo "
                                    ";
                // line 244
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rcpAdresse", array()), 'row');
                echo "
                                    <hr>
                                    ";
                // line 246
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rcpNbrAssis", array()), 'row');
                echo "
                                    ";
                // line 247
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rcpNbrDebout", array()), 'row');
                echo "
                                    ";
                // line 248
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rcpMiseService", array()), 'row');
                echo "
                                </div>

                                ";
                // line 261
                echo "                            </div>

                            ";
                // line 264
                echo "                            ";
                // line 265
                echo "                            ";
                // line 266
                echo "                                ";
                // line 267
                echo "                                    ";
                // line 268
                echo "                                ";
                // line 269
                echo "
                                ";
                // line 271
                echo "                                    ";
                // line 272
                echo "                                        ";
                // line 273
                echo "                                            ";
                // line 274
                echo "                                            ";
                // line 275
                echo "                                                ";
                // line 276
                echo "                                                ";
                // line 277
                echo "                                                ";
                // line 278
                echo "                                                    ";
                // line 279
                echo "                                                        ";
                // line 280
                echo "                                                        ";
                // line 281
                echo "                                                            ";
                // line 282
                echo "                                                        ";
                // line 283
                echo "                                                        ";
                // line 284
                echo "                                                    ";
                // line 285
                echo "                                                ";
                // line 286
                echo "                                                ";
                // line 287
                echo "                                            ";
                // line 288
                echo "                                        ";
                // line 289
                echo "                                    ";
                // line 290
                echo "                                ";
                // line 291
                echo "                            ";
                // line 292
                echo "                            ";
                // line 293
                echo "
                            <div class=\"box-footer\">
                                <input type=\"hidden\" name=\"num_saisie\" id=\"num_saisie\" value=\"";
                // line 295
                if (array_key_exists("num_saisie", $context)) {
                    echo twig_escape_filter($this->env, ($context["num_saisie"] ?? $this->getContext($context, "num_saisie")), "html", null, true);
                }
                echo "\">
                                <input type=\"hidden\" name=\"nb-total-vehicule\" id=\"id-nb-total-vehicule\" value=\"";
                // line 296
                if (array_key_exists("nb_vehicule", $context)) {
                    echo twig_escape_filter($this->env, ($context["nb_vehicule"] ?? $this->getContext($context, "nb_vehicule")), "html", null, true);
                }
                echo "\">
                                <input type=\"hidden\" id=\"id-is-focus\" value=\" ";
                // line 297
                echo twig_escape_filter($this->env, ($context["is_focus"] ?? $this->getContext($context, "is_focus")), "html", null, true);
                echo "\" name=\"\"/>
                                ";
                // line 298
                if ((array_key_exists("is_stop", $context) && (($context["is_stop"] ?? $this->getContext($context, "is_stop")) == false))) {
                    // line 299
                    echo "                                    <input type=\"submit\" class=\"btn btn-warning\" value=\"Suivant\" name=\"new_type_reception\"/>
                                ";
                } else {
                    // line 301
                    echo "                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_reception\"/>
                                ";
                }
                // line 303
                echo "                            </div>
                        </div>
                        ";
                // line 305
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
                echo "
                    </div>
                </div>
            </div>



        ";
            }
            // line 313
            echo "    ";
        }
        // line 314
        echo "

";
        
        $__internal_e97c07938cbcd167a0f4f3b45a57e77e1f57aeb285ffdff0621861f3622bbb52->leave($__internal_e97c07938cbcd167a0f4f3b45a57e77e1f57aeb285ffdff0621861f3622bbb52_prof);

        
        $__internal_a3710a91c6017b9f6fd8f89e20af87a7657b54a7779f8dcaa3d080c3e0d5c576->leave($__internal_a3710a91c6017b9f6fd8f89e20af87a7657b54a7779f8dcaa3d080c3e0d5c576_prof);

    }

    // line 318
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b78128748c72a060c65f01c661028902fc87a851693be6230262cbb177473e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b78128748c72a060c65f01c661028902fc87a851693be6230262cbb177473e45->enter($__internal_b78128748c72a060c65f01c661028902fc87a851693be6230262cbb177473e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_487ec8491003eec55e253f4d6b1bdc293905586da6cbade9aa2a09d1a40d240e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487ec8491003eec55e253f4d6b1bdc293905586da6cbade9aa2a09d1a40d240e->enter($__internal_487ec8491003eec55e253f4d6b1bdc293905586da6cbade9aa2a09d1a40d240e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 319
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>

    <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/edit.reception.js"), "html", null, true);
        echo "\"></script>
    <!-- Base URL -->
    <script>
        var _base_url = \"";
        // line 327
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard_index");
        echo "\";
    </script>
";
        
        $__internal_487ec8491003eec55e253f4d6b1bdc293905586da6cbade9aa2a09d1a40d240e->leave($__internal_487ec8491003eec55e253f4d6b1bdc293905586da6cbade9aa2a09d1a40d240e_prof);

        
        $__internal_b78128748c72a060c65f01c661028902fc87a851693be6230262cbb177473e45->leave($__internal_b78128748c72a060c65f01c661028902fc87a851693be6230262cbb177473e45_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtReception/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  718 => 327,  712 => 324,  707 => 322,  700 => 319,  691 => 318,  679 => 314,  676 => 313,  665 => 305,  661 => 303,  657 => 301,  653 => 299,  651 => 298,  647 => 297,  641 => 296,  635 => 295,  631 => 293,  629 => 292,  627 => 291,  625 => 290,  623 => 289,  621 => 288,  619 => 287,  617 => 286,  615 => 285,  613 => 284,  611 => 283,  609 => 282,  607 => 281,  605 => 280,  603 => 279,  601 => 278,  599 => 277,  597 => 276,  595 => 275,  593 => 274,  591 => 273,  589 => 272,  587 => 271,  584 => 269,  582 => 268,  580 => 267,  578 => 266,  576 => 265,  574 => 264,  570 => 261,  564 => 248,  560 => 247,  556 => 246,  551 => 244,  547 => 243,  542 => 242,  536 => 240,  534 => 239,  531 => 238,  525 => 236,  519 => 234,  517 => 233,  513 => 232,  504 => 225,  495 => 218,  491 => 217,  487 => 216,  482 => 215,  478 => 211,  474 => 206,  470 => 205,  466 => 204,  462 => 203,  458 => 202,  453 => 200,  449 => 199,  445 => 198,  441 => 196,  439 => 189,  435 => 188,  430 => 186,  425 => 184,  421 => 183,  412 => 176,  408 => 174,  394 => 171,  390 => 170,  386 => 168,  371 => 156,  364 => 152,  356 => 146,  353 => 145,  344 => 142,  339 => 141,  334 => 140,  332 => 139,  292 => 101,  289 => 100,  280 => 97,  275 => 96,  270 => 95,  268 => 94,  256 => 85,  248 => 79,  245 => 78,  236 => 72,  233 => 71,  231 => 70,  228 => 69,  219 => 66,  216 => 65,  211 => 64,  202 => 61,  199 => 60,  194 => 59,  185 => 58,  166 => 52,  154 => 49,  147 => 46,  138 => 45,  127 => 41,  125 => 40,  123 => 39,  117 => 36,  115 => 35,  113 => 34,  111 => 33,  109 => 32,  104 => 29,  97 => 28,  95 => 27,  89 => 26,  85 => 24,  82 => 22,  80 => 21,  71 => 20,  61 => 1,  59 => 56,  57 => 55,  55 => 54,  52 => 16,  49 => 14,  47 => 13,  45 => 12,  43 => 11,  41 => 10,  39 => 8,  37 => 5,  35 => 3,  11 => 1,);
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

{% if show_first_page is not defined and is_stop is not defined or (is_stop is defined and is_stop == false) %}

    {% form_theme form ':form:fields.html.twig' %}

    {#{{% form_theme form.ctCentre _self %}}#}
    {% form_theme form.ctVehicule.ctGenre _self %}
    {#{% form_theme form.ctTypeReception _self %}#}
    {% form_theme form.ctVehicule.ctMarque _self %}
    {% form_theme form.ctSourceEnergie _self %}
    {% form_theme form.ctCarosserie _self %}
    {% if rec_type is defined and rec_type == \"isole\" %}
        {% form_theme form.ctMotif _self %}
    {% endif %}
    {% form_theme form.ctUtilisation _self %}

{% endif %}

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

{% block title %}{{ parent() }} Ajout Réception {% endblock %}

{% set menu_reception               = true %}
{% set menu_reception_create        = true %}
{% set menu_reception_create_create = true %}

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

    {% if is_stop is defined and is_stop == true and id_recep is defined  %}
        <div style=\"text-align: center\">
            <a href=\"{{ path('reception_generer_pv', { 'id': id_recep }) }}\"
               class=\"btn btn-primary btn-lg\" target=\"_blank\">
                Générer PV
            </a>
        </div>
    {% else %}
        {% if show_first_page is defined %}
            <div class=\"row\">
                <div class=\"col-md-6\" id=\"id-choix-reception\">
                    <div class=\"box box-success\">
                        <div class=\"box-header text-center\">
                            <h3 class=\"box-title\">Nouvelle réception</h3>
                        </div>
                        <form name=\"nb_vehicule\" id=\"nb_vehicule\" action=\"{{ path('reception_new')}}\" method=\"post\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6 col-md-6 col-lg-4\">
                                            <select class=\"form-control\" data-placeholder=\"Choisir\" id=\"select-type\">
                                                <option value=\"\" selected=\"selected\">
                                                    Choisir
                                                </option>
                                                {% if type_receptions %}
                                                    {% for rcpt in type_receptions %}
                                                        <option value=\"{{ rcpt.tprcpLibelle }}\">
                                                            {{ rcpt.tprcpLibelle }}
                                                        </option>
                                                    {% endfor %}
                                                {% endif %}

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"creer-form\" class=\"hide\">
                                    <div class=\"form-group\" id=\"nb-vehicule-form\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-6 col-md-6 col-lg-4\">
                                                <input type=\"number\" min=\"1\" id=\"ct_nb_total_vehicule\" name=\"ct_nb_total_vehicule\" class=\"form-control\" value=\"\" oninvalid=\"setErrorClass(\$(this));\"
                                                placeholder=\"Nombre de vehicules\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-6 col-md-6 col-lg-4 text-center\">
                                                <button type=\"submit\" class=\"btn btn-success form-control\" id=\"ct_creer_recep\">Cr&eacute;er</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-md-6\" id=\"id-bilan-reception\">
                    <div class=\"box box-success\">
                        <div class=\"box-header text-center\">
                            <h3 class=\"box-title\">Bilan</h3>
                        </div>
                        <div class=\"box-body\">
                            <div class=\"kl-fdc\">
                                <div class=\"form-group\">
                                    <select required class=\"form-control\" data-placeholder=\"Choisir\" id=\"select-type-bilan\">
                                        <option value=\"\" selected=\"selected\">
                                            Choisir
                                        </option>
                                        {% if type_receptions %}
                                            {% for rcpt in type_receptions %}
                                                <option value=\"{{ rcpt.id }}\">
                                                    {{ rcpt.tprcpLibelle }}
                                                </option>
                                            {% endfor %}
                                        {% endif %}

                                    </select>
                                </div>
                                <div class=\"form-group\">
                                <input required type=\"text\" id=\"ct_date_generer\" name=\"ct_date_generer\" class=\"form-control cs-datepicker\">
                                </div>
                                <a href=\"{{ path('reception_generer_fdc_rec') }}\"
                                   class=\"btn btn-primary btn-lg\" id=\"ct_link_generer_feuille_caisse\" target=\"_blank\">
                                    Feuille de caisse
                                </a>
                                <a href=\"{{ path('reception_generer_fdctrl_rec') }}\"
                                   class=\"btn btn-danger btn-lg\" id=\"ct_link_generer_fiche_controle\" target=\"_blank\">
                                    Fiche de contrôle
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        {% else %}

            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\"><h3>Nouvelle Réception {{ rec_type|capitalize }}
                        {% if nb_vehicule is defined %}<span class=\"label label-warning\">{% if num_saisie is defined %}{{ num_saisie }}{% endif %}/{{ nb_vehicule }} V&eacute;hicules</span>{% endif %}</h3></div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        {{ form_start(form) }}
                        {# Formulaire véhicule #}
                        <div class=\"col-md-6\">
                            <div class=\"box box-success\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\">Informations véhicule</h3>
                                </div>

                                <div class=\"box-body\">
                                    {{ form_row(form.ctVehicule.ctGenre) }}
                                    {{ form_row(form.ctVehicule.ctMarque) }}
                                    <hr>
                                    {{ form_row(form.ctVehicule.vhcType) }}
                                    <div class=\"form-group\">
                                        {{ form_label(form.ctVehicule.vhcNumSerie) }}
                                        {{ form_widget(form.ctVehicule.vhcNumSerie,
                                        {
                                            'attr': {
                                            'class': 'form-control',
                                            'ajax-url': path('reception_autocomplete_vehicule')
                                        }
                                        }
                                        )}}
                                    </div>
                                    {{ form_row(form.ctVehicule.vhcNumMoteur) }}
                                    {{ form_row(form.ctCarosserie) }}
                                    {{ form_row(form.ctSourceEnergie) }}
                                    <hr>
                                    {{ form_row(form.ctVehicule.vhcCylindre) }}
                                    {{ form_row(form.ctVehicule.vhcPuissance) }}
                                    {{ form_row(form.ctVehicule.vhcPoidsVide) }}
                                    {{ form_row(form.ctVehicule.vhcChargeUtile) }}
                                    {{ form_row(form.ctVehicule.vhcPoidsTotalCharge) }}
                                    {#<div class=\"form-group\">
                                        <label for=\"ct_ptac\" class=\"\">Poids total a charge</label>
                                        <input type=\"text\" id=\"ct_ptac\" name=\"ct_ptac\" class=\"form-control\" value=\"\" disabled>
                                    </div>#}

                                    <div class=\"hidden\">
                                        {#{{ form_row(form.ctCentre) }}
                                        {{ form_row(form.ctTypeReception) }}#}
                                        {{ form_row(form.ctVehicule.vhcHauteur) }}
                                        {{ form_row(form.ctVehicule.vhcLongueur) }}
                                        {{ form_row(form.ctVehicule.vhcLargeur) }}
                                        {{ form_row(form.ctVehicule.vhcProvenance) }}
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
                                    {{ form_row(form.ctUtilisation) }}
                                    {% if rec_type is defined and rec_type == \"isole\" %}
                                        {{ form_row(form.ctMotif) }}
                                    {% else %}
                                        {{ form_row(form.ctMotif, { 'attr':{'disabled':'disabled'} }) }}
                                    {% endif %}
                                    <hr>
                                    {% if rec_type is defined and rec_type == \"isole\" %}
                                        {{ form_row(form.rcpImmatriculation) }}
                                    {% endif %}
                                    {{ form_row(form.rcpProprietaire) }}
                                    {{ form_row(form.rcpProfession) }}
                                    {{ form_row(form.rcpAdresse) }}
                                    <hr>
                                    {{ form_row(form.rcpNbrAssis) }}
                                    {{ form_row(form.rcpNbrDebout) }}
                                    {{ form_row(form.rcpMiseService) }}
                                </div>

                                {# <div class=\"box-footer\">
                                    <input type=\"hidden\" name=\"num_saisie\" id=\"num_saisie\" value=\"{% if num_saisie is defined %}{{ num_saisie }}{% endif %}\">
                                    <input type=\"hidden\" name=\"nb-total-vehicule\" id=\"id-nb-total-vehicule\" value=\"{% if nb_vehicule is defined %}{{ nb_vehicule }}{% endif %}\">
                                    <input type=\"hidden\" id=\"id-is-focus\" value=\" {{ is_focus }}\" name=\"\"/>
                                    {% if is_stop is defined and is_stop == false %}
                                        <input type=\"submit\" class=\"btn btn-warning\" value=\"Suivant\" name=\"new_type_reception\"/>
                                    {% else %}
                                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_reception\"/>
                                    {% endif %}
                                </div> #}
                            </div>

                            {# {% if adesit == true %} #}
                            {# Informations des imprimés utilisés #}
                            {# <div class=\"box box-warning\"> #}
                                {# <div class=\"box-header\"> #}
                                    {# <h3 class=\"box-title\">Informations imprimés techniques utilisés</h3> #}
                                {# </div> #}

                                {# <div class=\"row\"> #}
                                    {# <div class=\"box-body\"> #}
                                        {# <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\"> #}
                                            {# <label for=\"ct_imprime_tech_use\">Séléctionner les N° imprimés utilisés</label> #}
                                            {# <select id=\"ct_imprime_tech_use\" name=\"ct_imprime_tech_use[]\" class=\"form-control select2 mx-6\" #}
                                                {# style=\"width: 100%;\" data-placeholder=\"  Choisir\" multiple=\"\" required> #}
                                                {# {% for imprime_tech in imprimes_tech %} #}
                                                {# <optgroup label=\"{{ imprime_tech.nomImprimeTech|upper }}\"> #}
                                                    {# {% for imprime_tech_use in imprimes_tech_use %} #}
                                                        {# {% if imprime_tech.id == imprime_tech_use.ctImprimeTech.id %} #}
                                                        {# <option value=\"{{ imprime_tech_use.id }}\"> #}
                                                            {# {{ imprime_tech_use.ituNumero|upper }} #}
                                                        {# </option> #}
                                                        {# {% endif %} #}
                                                    {# {% endfor %} #}
                                                {# </optgroup> #}
                                                {# {% endfor %} #}
                                            {# </select> #}
                                        {# </div> #}
                                    {# </div> #}
                                {# </div> #}
                            {# </div> #}
                            {# {% endif %} #}

                            <div class=\"box-footer\">
                                <input type=\"hidden\" name=\"num_saisie\" id=\"num_saisie\" value=\"{% if num_saisie is defined %}{{ num_saisie }}{% endif %}\">
                                <input type=\"hidden\" name=\"nb-total-vehicule\" id=\"id-nb-total-vehicule\" value=\"{% if nb_vehicule is defined %}{{ nb_vehicule }}{% endif %}\">
                                <input type=\"hidden\" id=\"id-is-focus\" value=\" {{ is_focus }}\" name=\"\"/>
                                {% if is_stop is defined and is_stop == false %}
                                    <input type=\"submit\" class=\"btn btn-warning\" value=\"Suivant\" name=\"new_type_reception\"/>
                                {% else %}
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_reception\"/>
                                {% endif %}
                            </div>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>



        {% endif %}
    {% endif %}


{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>

    <script src=\"{{ asset('backoffice/js/edit.reception.js') }}\"></script>
    <!-- Base URL -->
    <script>
        var _base_url = \"{{ path('dashboard_index') }}\";
    </script>
{% endblock %}", "@Admin/CtReception/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtReception\\add.html.twig");
    }
}
