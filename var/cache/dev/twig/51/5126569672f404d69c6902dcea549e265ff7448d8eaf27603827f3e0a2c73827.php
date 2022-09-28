<?php

/* AdminBundle:CtImprimeTechUse:used.html.twig */
class __TwigTemplate_a720415783d8ad1403b3216cab6a3962152e628cfa5ef77dc58dbd2405a18a6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtImprimeTechUse:used.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
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
        $__internal_dfbd4d2154cc8b8fb1827083f4a3733a0a34996c62c17a5ec6d7dd4c2750671a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbd4d2154cc8b8fb1827083f4a3733a0a34996c62c17a5ec6d7dd4c2750671a->enter($__internal_dfbd4d2154cc8b8fb1827083f4a3733a0a34996c62c17a5ec6d7dd4c2750671a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTechUse:used.html.twig"));

        $__internal_2c0009713a6abd30fb9590efd649b588fb41005f4e4ea945a6391b6d5e898fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0009713a6abd30fb9590efd649b588fb41005f4e4ea945a6391b6d5e898fcf->enter($__internal_2c0009713a6abd30fb9590efd649b588fb41005f4e4ea945a6391b6d5e898fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTechUse:used.html.twig"));

        // line 5
        $context["menu_imprime_tech_use"] = true;
        // line 6
        $context["menu_imprime_tech_use_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfbd4d2154cc8b8fb1827083f4a3733a0a34996c62c17a5ec6d7dd4c2750671a->leave($__internal_dfbd4d2154cc8b8fb1827083f4a3733a0a34996c62c17a5ec6d7dd4c2750671a_prof);

        
        $__internal_2c0009713a6abd30fb9590efd649b588fb41005f4e4ea945a6391b6d5e898fcf->leave($__internal_2c0009713a6abd30fb9590efd649b588fb41005f4e4ea945a6391b6d5e898fcf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3c3a24f0546e0291a56c0392546a494d18351734915893105cb9b713f075004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c3a24f0546e0291a56c0392546a494d18351734915893105cb9b713f075004->enter($__internal_c3c3a24f0546e0291a56c0392546a494d18351734915893105cb9b713f075004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_21f3e71bacd77ee81865c08cc494906dd66cd75f370050ec0da5c14b56d56fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f3e71bacd77ee81865c08cc494906dd66cd75f370050ec0da5c14b56d56fb6->enter($__internal_21f3e71bacd77ee81865c08cc494906dd66cd75f370050ec0da5c14b56d56fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Mise à jour utilisation des imprimés ";
        
        $__internal_21f3e71bacd77ee81865c08cc494906dd66cd75f370050ec0da5c14b56d56fb6->leave($__internal_21f3e71bacd77ee81865c08cc494906dd66cd75f370050ec0da5c14b56d56fb6_prof);

        
        $__internal_c3c3a24f0546e0291a56c0392546a494d18351734915893105cb9b713f075004->leave($__internal_c3c3a24f0546e0291a56c0392546a494d18351734915893105cb9b713f075004_prof);

    }

    // line 8
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_41dd83418eb109b9bada17cc2f9dd19d9de001c67fb085a4cd377340348bb75e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41dd83418eb109b9bada17cc2f9dd19d9de001c67fb085a4cd377340348bb75e->enter($__internal_41dd83418eb109b9bada17cc2f9dd19d9de001c67fb085a4cd377340348bb75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_a171dc9afb7c6f81124cef5c8da14e19ee8d94c78f820b4a57c8b67da40f0661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a171dc9afb7c6f81124cef5c8da14e19ee8d94c78f820b4a57c8b67da40f0661->enter($__internal_a171dc9afb7c6f81124cef5c8da14e19ee8d94c78f820b4a57c8b67da40f0661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 9
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 10
            $context["required"] = false;
        }
        // line 12
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 14
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 15
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 16
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 17
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 20
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 21
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 22
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 23
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 24
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 27
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 28
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 29
        echo "</select>
    </span>";
        
        $__internal_a171dc9afb7c6f81124cef5c8da14e19ee8d94c78f820b4a57c8b67da40f0661->leave($__internal_a171dc9afb7c6f81124cef5c8da14e19ee8d94c78f820b4a57c8b67da40f0661_prof);

        
        $__internal_41dd83418eb109b9bada17cc2f9dd19d9de001c67fb085a4cd377340348bb75e->leave($__internal_41dd83418eb109b9bada17cc2f9dd19d9de001c67fb085a4cd377340348bb75e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_92541f4f6f8435ba8d54b37bc8bfa213424b71735cbb0921c7d996077314e3e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92541f4f6f8435ba8d54b37bc8bfa213424b71735cbb0921c7d996077314e3e1->enter($__internal_92541f4f6f8435ba8d54b37bc8bfa213424b71735cbb0921c7d996077314e3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f552f57b73716e5ef865363fa3ba9a2ee8716382137e57914488f9dba49a5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f552f57b73716e5ef865363fa3ba9a2ee8716382137e57914488f9dba49a5f4->enter($__internal_2f552f57b73716e5ef865363fa3ba9a2ee8716382137e57914488f9dba49a5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 35
            echo "        <div class=\"callout callout-success\">
            ";
            // line 36
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 40
            echo "        <div class=\"callout callout-warning\">
            ";
            // line 41
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 45
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 46
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Mise à jour utilisation des imprimés </h3>
                </div>

                <div class=\"box-body\">
                    <form id=\"uit_form\" action=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_new");
        echo "\" method=\"POST\">
                        <div class=\"modal-body\">

                            <!-- Année -->
                            ";
        // line 69
        echo "
                            <!-- Centre -->
                            <div class=\"";
        // line 71
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN")) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_APPROVISIONNEMENT")))) {
            echo "hidden";
        }
        echo "\">
                                <div class=\"row\">
                                    <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                        <label for=\"ct_uit_centre\">Sélectionner le centre</label>
                                        <select id=\"ct_uit_centre\" name=\"ct_uit_centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\" ";
        // line 76
        echo ">
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? $this->getContext($context, "provinces")));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 81
            echo "                                            <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "\">
                                                ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? $this->getContext($context, "centres")));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 83
                echo "                                                    ";
                // line 84
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
                echo "\">
                                                            ";
                // line 85
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array())), "html", null, true);
                echo "
                                                        </option>
                                                    ";
                // line 88
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                                            </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Motid d'utilisation -->
                            <div class=\"row\">
                                <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                    <label for=\"ct_uit_motif\">Séléctionner le motif d'utilisation </label>
                                    <select id=\"ct_uit_motif\" name=\"ct_uit_motif\" class=\"form-control select2 mx-6\"
                                        style=\"width: 100%;\" data-placeholder=\"  Choisir\" required >
                                        <option value=\"\" selected=\"selected\">
                                            Choisir
                                        </option>
                                        <option value=\"Authenticité\">Authenticité</option>
                                        <option value=\"Autres\">Autres</option>
                                        <option value=\"Caractéristique\">Caractéristique</option>
                                        <option value=\"Constatation\">Constatation</option>
                                        <option value=\"Contre\">Contre</option>
                                        <option value=\"Duplicata\" disabled >Duplicata</option>
                                        <option value=\"Duplicata visite\">Duplicata visite</option>
                                        <option value=\"Duplicata réception\">Duplicata réception</option>
                                        <option value=\"Mutation\">Mutation</option>
                                        <option value=\"Rebut\">Rebut</option>
                                        <option value=\"Réception\">Réception</option>
                                        <option value=\"Visite\">Visite</option>
                                        <option value=\"Spéciale\">Spéciale</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Contrôles techniques -->
                            <div class=\"row\">
                                <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                    <label for=\"ct_controle_id\">Séléctionner le N° de contrôle ou d'enregistrement </label>
                                    <select id=\"ct_controle_id\" name=\"ct_controle_id\" class=\"form-control select2 mx-6\"
                                        style=\"width: 100%;\" data-placeholder=\"  Choisir\" required >
                                        <option value=\"\" selected=\"selected\">
                                            Choisir
                                        </option>
                                        <optgroup label=\"Visites\">
                                            ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["visites"] ?? $this->getContext($context, "visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
            // line 133
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["visite"], "id", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 134
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["visite"], "id", array())), "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                                        </optgroup>
                                        <optgroup label=\"Réceptions\">
                                            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["receptions"] ?? $this->getContext($context, "receptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["reception"]) {
            // line 140
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reception"], "id", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 141
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["reception"], "id", array())), "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reception'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                                        </optgroup>
                                        <optgroup label=\"Constatations\">
                                            ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["constatations"] ?? $this->getContext($context, "constatations")));
        foreach ($context['_seq'] as $context["_key"] => $context["constatation"]) {
            // line 147
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["constatation"], "id", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 148
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["constatation"], "id", array())), "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constatation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <!-- Imprimés techniques -->
                            <div class=\"row\">
                                <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                    <label for=\"ct_imprime_tech_use_id\">Séléctionner les N° imprimés utilisés</label>
                                    <select id=\"ct_imprime_tech_use_id\" name=\"ct_imprime_tech_use_id[]\" class=\"form-control select2 mx-6\"
                                        style=\"width: 100%;\" data-placeholder=\"  Choisir\" multiple=\"\" required >
                                        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprimes"] ?? $this->getContext($context, "imprimes")));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime"]) {
            // line 163
            echo "                                        <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime"], "nomImprimeTech", array())), "html", null, true);
            echo "\">
                                            ";
            // line 164
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["useds_it"] ?? $this->getContext($context, "useds_it")));
            foreach ($context['_seq'] as $context["_key"] => $context["used_it"]) {
                // line 165
                echo "                                                ";
                if (($this->getAttribute($context["imprime"], "id", array()) == $this->getAttribute($this->getAttribute($context["used_it"], "ctImprimeTech", array()), "id", array()))) {
                    // line 166
                    echo "                                                ";
                    // line 167
                    echo "                                                ";
                    // line 168
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["used_it"], "id", array()), "html", null, true);
                    echo "\">
                                                    ";
                    // line 169
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["used_it"], "ituNumero", array())), "html", null, true);
                    echo "
                                                </option>
                                                ";
                    // line 172
                    echo "                                                ";
                }
                // line 173
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['used_it'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                                        </optgroup>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <div class=\"box-body\">
                                        <div class=\"form-group\" style=\"margin: 0 0 8px 0; padding: 0 0 8px 0;\">
                                            ";
        // line 185
        echo "                                            <button type=\"submit\" class=\"btn btn-primary\" name=\"save_used_it\">
                                                Enregistrer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_2f552f57b73716e5ef865363fa3ba9a2ee8716382137e57914488f9dba49a5f4->leave($__internal_2f552f57b73716e5ef865363fa3ba9a2ee8716382137e57914488f9dba49a5f4_prof);

        
        $__internal_92541f4f6f8435ba8d54b37bc8bfa213424b71735cbb0921c7d996077314e3e1->leave($__internal_92541f4f6f8435ba8d54b37bc8bfa213424b71735cbb0921c7d996077314e3e1_prof);

    }

    // line 202
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b088e1af407b3f48f9315d585edd0b7cf30ccc1eaaa864de21a21bd65d5dfa23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b088e1af407b3f48f9315d585edd0b7cf30ccc1eaaa864de21a21bd65d5dfa23->enter($__internal_b088e1af407b3f48f9315d585edd0b7cf30ccc1eaaa864de21a21bd65d5dfa23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8627d5ffba7ba0b470408e52445f803942adff80ba14631dd2061f68dd9ea08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8627d5ffba7ba0b470408e52445f803942adff80ba14631dd2061f68dd9ea08d->enter($__internal_8627d5ffba7ba0b470408e52445f803942adff80ba14631dd2061f68dd9ea08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 203
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Mise à jour multiple d'utilisation IT -->
    <!-- JQuery UI -->
    <script>
        var _senddata_new_utilisation_it_ajax = \"";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_new");
        echo "\";
    </script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
";
        
        $__internal_8627d5ffba7ba0b470408e52445f803942adff80ba14631dd2061f68dd9ea08d->leave($__internal_8627d5ffba7ba0b470408e52445f803942adff80ba14631dd2061f68dd9ea08d_prof);

        
        $__internal_b088e1af407b3f48f9315d585edd0b7cf30ccc1eaaa864de21a21bd65d5dfa23->leave($__internal_b088e1af407b3f48f9315d585edd0b7cf30ccc1eaaa864de21a21bd65d5dfa23_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtImprimeTechUse:used.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 210,  487 => 208,  478 => 203,  469 => 202,  444 => 185,  434 => 176,  427 => 174,  421 => 173,  418 => 172,  413 => 169,  408 => 168,  406 => 167,  404 => 166,  401 => 165,  397 => 164,  392 => 163,  388 => 162,  375 => 151,  366 => 148,  361 => 147,  357 => 146,  353 => 144,  344 => 141,  339 => 140,  335 => 139,  331 => 137,  322 => 134,  317 => 133,  313 => 132,  270 => 91,  263 => 89,  257 => 88,  252 => 85,  247 => 84,  245 => 83,  241 => 82,  236 => 81,  232 => 80,  226 => 76,  216 => 71,  212 => 69,  205 => 58,  194 => 49,  185 => 46,  182 => 45,  177 => 44,  168 => 41,  165 => 40,  160 => 39,  151 => 36,  148 => 35,  143 => 34,  134 => 33,  123 => 29,  121 => 28,  119 => 27,  113 => 24,  111 => 23,  109 => 22,  107 => 21,  105 => 20,  100 => 17,  93 => 16,  91 => 15,  85 => 14,  81 => 12,  78 => 10,  76 => 9,  67 => 8,  48 => 3,  38 => 1,  36 => 6,  34 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Mise à jour utilisation des imprimés {% endblock %}

{% set menu_imprime_tech_use      = true %}
{% set menu_imprime_tech_use_list = true %}

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

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('warning') %}
        <div class=\"callout callout-warning\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Mise à jour utilisation des imprimés </h3>
                </div>

                <div class=\"box-body\">
                    <form id=\"uit_form\" action=\"{{ path('imprime_tech_use_new') }}\" method=\"POST\">
                        <div class=\"modal-body\">

                            <!-- Année -->
                            {# <div class=\"row\">
                                <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                    <label for=\"ct_uit_date\">Sélectionner la date</label>
                                    <input id=\"ct_uit_date\" name=\"ct_uit_date\" class=\"form-control datepicker\"
                                        value=\"{{ \"now\"|date(\"d/m/Y\") }}\" required />
                                </div>
                            </div> #}

                            <!-- Centre -->
                            <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') and app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_APPROVISIONNEMENT') %}hidden{% endif %}\">
                                <div class=\"row\">
                                    <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                        <label for=\"ct_uit_centre\">Sélectionner le centre</label>
                                        <select id=\"ct_uit_centre\" name=\"ct_uit_centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\" {# required #}>
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            {% for province in provinces %}
                                            <optgroup label=\"{{ province.prvNom }}\">
                                                {% for centre in centres %}
                                                    {# {% if province.id == centre.ctProvince.id %} #}
                                                        <option value=\"{{ centre.id }}\">
                                                            {{ centre.ctrNom|upper }}
                                                        </option>
                                                    {# {% endif %} #}
                                                {% endfor %}
                                            </optgroup>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Motid d'utilisation -->
                            <div class=\"row\">
                                <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                    <label for=\"ct_uit_motif\">Séléctionner le motif d'utilisation </label>
                                    <select id=\"ct_uit_motif\" name=\"ct_uit_motif\" class=\"form-control select2 mx-6\"
                                        style=\"width: 100%;\" data-placeholder=\"  Choisir\" required >
                                        <option value=\"\" selected=\"selected\">
                                            Choisir
                                        </option>
                                        <option value=\"Authenticité\">Authenticité</option>
                                        <option value=\"Autres\">Autres</option>
                                        <option value=\"Caractéristique\">Caractéristique</option>
                                        <option value=\"Constatation\">Constatation</option>
                                        <option value=\"Contre\">Contre</option>
                                        <option value=\"Duplicata\" disabled >Duplicata</option>
                                        <option value=\"Duplicata visite\">Duplicata visite</option>
                                        <option value=\"Duplicata réception\">Duplicata réception</option>
                                        <option value=\"Mutation\">Mutation</option>
                                        <option value=\"Rebut\">Rebut</option>
                                        <option value=\"Réception\">Réception</option>
                                        <option value=\"Visite\">Visite</option>
                                        <option value=\"Spéciale\">Spéciale</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Contrôles techniques -->
                            <div class=\"row\">
                                <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                    <label for=\"ct_controle_id\">Séléctionner le N° de contrôle ou d'enregistrement </label>
                                    <select id=\"ct_controle_id\" name=\"ct_controle_id\" class=\"form-control select2 mx-6\"
                                        style=\"width: 100%;\" data-placeholder=\"  Choisir\" required >
                                        <option value=\"\" selected=\"selected\">
                                            Choisir
                                        </option>
                                        <optgroup label=\"Visites\">
                                            {% for visite in visites %}
                                                <option value=\"{{ visite.id }}\">
                                                    {{ visite.id|upper }}
                                                </option>
                                            {% endfor %}
                                        </optgroup>
                                        <optgroup label=\"Réceptions\">
                                            {% for reception in receptions %}
                                                <option value=\"{{ reception.id }}\">
                                                    {{ reception.id|upper }}
                                                </option>
                                            {% endfor %}
                                        </optgroup>
                                        <optgroup label=\"Constatations\">
                                            {% for constatation in constatations %}
                                                <option value=\"{{ constatation.id }}\">
                                                    {{ constatation.id|upper }}
                                                </option>
                                            {% endfor %}
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <!-- Imprimés techniques -->
                            <div class=\"row\">
                                <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                    <label for=\"ct_imprime_tech_use_id\">Séléctionner les N° imprimés utilisés</label>
                                    <select id=\"ct_imprime_tech_use_id\" name=\"ct_imprime_tech_use_id[]\" class=\"form-control select2 mx-6\"
                                        style=\"width: 100%;\" data-placeholder=\"  Choisir\" multiple=\"\" required >
                                        {% for imprime in imprimes %}
                                        <optgroup label=\"{{ imprime.nomImprimeTech|upper }}\">
                                            {% for used_it in useds_it %}
                                                {% if imprime.id == used_it.ctImprimeTech.id %}
                                                {# {% set counter = ( counter | default(0) ) + 1 %} #}
                                                {# {% if counter <= 20 %} #}
                                                <option value=\"{{ used_it.id }}\">
                                                    {{ used_it.ituNumero|upper }}
                                                </option>
                                                {# {% endif %} #}
                                                {% endif %}
                                            {% endfor %}
                                        </optgroup>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <div class=\"box-body\">
                                        <div class=\"form-group\" style=\"margin: 0 0 8px 0; padding: 0 0 8px 0;\">
                                            {# <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"save_used_it\"/> #}
                                            <button type=\"submit\" class=\"btn btn-primary\" name=\"save_used_it\">
                                                Enregistrer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- Mise à jour multiple d'utilisation IT -->
    <!-- JQuery UI -->
    <script>
        var _senddata_new_utilisation_it_ajax = \"{{ path('imprime_tech_use_new') }}\";
    </script>
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>
{% endblock %}", "AdminBundle:CtImprimeTechUse:used.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtImprimeTechUse/used.html.twig");
    }
}
