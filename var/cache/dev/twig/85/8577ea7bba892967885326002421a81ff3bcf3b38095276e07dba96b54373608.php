<?php

/* AdminBundle:CtContreVisite:edit.html.twig */
class __TwigTemplate_f02b460d507c59395dfa527a9383c7d591c8a8e955cc082737a6cfa7df103759 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtContreVisite:edit.html.twig", 1);
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
        $__internal_a3d9fca90d56deb23b5217e51375494d63eb7eb0e0b99e30c1b658315cd08bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d9fca90d56deb23b5217e51375494d63eb7eb0e0b99e30c1b658315cd08bb6->enter($__internal_a3d9fca90d56deb23b5217e51375494d63eb7eb0e0b99e30c1b658315cd08bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtContreVisite:edit.html.twig"));

        $__internal_7f4d9bbb1be1f4bd013434fd94ca1c5fc50aa6d74ee8d06d5130639cb550608f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f4d9bbb1be1f4bd013434fd94ca1c5fc50aa6d74ee8d06d5130639cb550608f->enter($__internal_7f4d9bbb1be1f4bd013434fd94ca1c5fc50aa6d74ee8d06d5130639cb550608f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtContreVisite:edit.html.twig"));

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
        $context["menu_contre_visite"] = true;
        // line 43
        $context["menu_contre_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3d9fca90d56deb23b5217e51375494d63eb7eb0e0b99e30c1b658315cd08bb6->leave($__internal_a3d9fca90d56deb23b5217e51375494d63eb7eb0e0b99e30c1b658315cd08bb6_prof);

        
        $__internal_7f4d9bbb1be1f4bd013434fd94ca1c5fc50aa6d74ee8d06d5130639cb550608f->leave($__internal_7f4d9bbb1be1f4bd013434fd94ca1c5fc50aa6d74ee8d06d5130639cb550608f_prof);

    }

    // line 15
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_9a226b8e53a25792bdfd8bffe04dce856edb09e99c1324e85dba61bfecb72003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a226b8e53a25792bdfd8bffe04dce856edb09e99c1324e85dba61bfecb72003->enter($__internal_9a226b8e53a25792bdfd8bffe04dce856edb09e99c1324e85dba61bfecb72003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_7961b29384ba1c0145e17de0aa5613b55cc4c04b2206996318e1e2feeaa528d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7961b29384ba1c0145e17de0aa5613b55cc4c04b2206996318e1e2feeaa528d9->enter($__internal_7961b29384ba1c0145e17de0aa5613b55cc4c04b2206996318e1e2feeaa528d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_7961b29384ba1c0145e17de0aa5613b55cc4c04b2206996318e1e2feeaa528d9->leave($__internal_7961b29384ba1c0145e17de0aa5613b55cc4c04b2206996318e1e2feeaa528d9_prof);

        
        $__internal_9a226b8e53a25792bdfd8bffe04dce856edb09e99c1324e85dba61bfecb72003->leave($__internal_9a226b8e53a25792bdfd8bffe04dce856edb09e99c1324e85dba61bfecb72003_prof);

    }

    // line 40
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb70ba38760dc40b4713625ddea324a4317f13f09cb9767755a5e1101dc315f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb70ba38760dc40b4713625ddea324a4317f13f09cb9767755a5e1101dc315f4->enter($__internal_cb70ba38760dc40b4713625ddea324a4317f13f09cb9767755a5e1101dc315f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7229d4430fb76f75b70eeb34b81cd122b4926f50da6a054ffb07de8c2859bb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7229d4430fb76f75b70eeb34b81cd122b4926f50da6a054ffb07de8c2859bb13->enter($__internal_7229d4430fb76f75b70eeb34b81cd122b4926f50da6a054ffb07de8c2859bb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Contre visite technique ";
        
        $__internal_7229d4430fb76f75b70eeb34b81cd122b4926f50da6a054ffb07de8c2859bb13->leave($__internal_7229d4430fb76f75b70eeb34b81cd122b4926f50da6a054ffb07de8c2859bb13_prof);

        
        $__internal_cb70ba38760dc40b4713625ddea324a4317f13f09cb9767755a5e1101dc315f4->leave($__internal_cb70ba38760dc40b4713625ddea324a4317f13f09cb9767755a5e1101dc315f4_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8cbc9de23768025f1698add8bcf741dbb0a3f97df781030b70bb70302fc16e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8cbc9de23768025f1698add8bcf741dbb0a3f97df781030b70bb70302fc16e6->enter($__internal_c8cbc9de23768025f1698add8bcf741dbb0a3f97df781030b70bb70302fc16e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_349009002d083f9516ac44a7baed1241ca5fd814d100a7184394ca79be5778fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349009002d083f9516ac44a7baed1241ca5fd814d100a7184394ca79be5778fa->enter($__internal_349009002d083f9516ac44a7baed1241ca5fd814d100a7184394ca79be5778fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 58
        echo "    <div class=\"row\" id=\"search-form\">
        <div class=\"col-md-12\">
            <div class=\"box box-default\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Recherche</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <form action=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contre_visite_search_by_immatriculation");
        echo "\" method=\"POST\">
                                <div class=\"form-group\">
                                    <label for=\"ct_numero_immatriculation\">Par numéro d'immatriculation</label>
                                    <select required id=\"ct_numero_immatriculation\"
                                            name=\"ct_numero_immatriculation\" class=\"form-control select2\">
                                        <option value=\"\" disabled selected>Séléctionner numéro immatriculation</option>
                                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_numero_immatriculation"] ?? $this->getContext($context, "list_numero_immatriculation")));
        foreach ($context['_seq'] as $context["_key"] => $context["numero_immatriculation"]) {
            // line 75
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["numero_immatriculation"], "cgImmatriculation", array()), "html", null, true);
            echo "\">
                                                ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["numero_immatriculation"], "cgImmatriculation", array()), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numero_immatriculation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher\" name=\"search_visite\"/>
                                </div>
                            </form>
                        </div>
                        <div class=\"col-md-6\">
                            <form action=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contre_visite_search_by_serie");
        echo "\" method=\"POST\">
                                <div class=\"form-group\">
                                    <label for=\"ct_numero_serie\">Par numéro dans la série du type</label>
                                    <select required id=\"ct_numero_serie\"
                                            name=\"ct_numero_serie\" class=\"form-control select2\">
                                        <option value=\"\" disabled selected>Séléctionner numéro série</option>
                                        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_numero_serie"] ?? $this->getContext($context, "list_numero_serie")));
        foreach ($context['_seq'] as $context["_key"] => $context["numero_serie"]) {
            // line 94
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["numero_serie"], "vhcNumSerie", array()), "html", null, true);
            echo "\">
                                                ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["numero_serie"], "vhcNumSerie", array()), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numero_serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher\" name=\"search_visite\"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 115
        echo "                <div class=\"box box-success\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations carte grise</h3>
                    </div>
    
                    <div class=\"box-body\" id=\"form-carte-grise\">
                        <div class=\"";
        // line 121
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctCentre", array()), 'row');
        echo "
                        </div>
                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgDateEmission", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgImmatriculation", array()), 'row');
        echo "
                        ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNumIdentification", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNom", array()), 'row');
        echo "
                        ";
        // line 131
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgProfession", array()), 'row');
        echo "
                        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgAdresse", array()), 'row');
        echo "
                        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgPhone", array()), 'row');
        echo "
                        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgCommune", array()), 'row');
        echo "
                    </div>
                </div>
    
                ";
        // line 139
        echo "                <div class=\"box box-success\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations véhicule</h3>
                    </div>
    
                    <div class=\"box-body\" id=\"form-vehicule\">
                        ";
        // line 145
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "ctGenre", array()), 'row');
        echo "
                        ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcType", array()), 'row');
        echo "
                        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "ctMarque", array()), 'row');
        echo "
                        ";
        // line 148
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcNumSerie", array()), 'row');
        echo "
                        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctCarosserie", array()), 'row');
        echo "
                        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcNumMoteur", array()), 'row');
        echo "
                        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctSourceEnergie", array()), 'row');
        echo "
                        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgPuissanceAdmin", array()), 'row');
        echo "
                        ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNbrAssis", array()), 'row');
        echo "
                        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPoidsTotalCharge", array()), 'row');
        echo "
                        ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPoidsVide", array()), 'row');
        echo "
                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcChargeUtile", array()), 'row');
        echo "
                        ";
        // line 157
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgMiseEnService", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgIsTransport", array()), 'row');
        echo "
                        <div id=\"form-transport\" class=\"";
        // line 160
        if (($this->getAttribute($this->getAttribute(($context["visite"] ?? $this->getContext($context, "visite")), "ctCarteGrise", array()), "cgIsTransport", array()) == 0)) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNomCooperative", array()), 'row');
        echo "
                            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgItineraire", array()), 'row');
        echo "
                            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNumVignette", array()), 'row');
        echo "
                            ";
        // line 164
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctZoneDeserte", array()), 'row');
        echo "
                        </div>
                    </div>
    
                    ";
        // line 169
        echo "                    <div class=\"hidden\">
                        <input type=\"text\" name=\"ct-visite-id\" id=\"ct-visite-id\"
                               value=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute(($context["visite"] ?? $this->getContext($context, "visite")), "id", array()), "html", null, true);
        echo "\" />
                        ";
        // line 172
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPuissance", array()), 'row');
        echo "
                        ";
        // line 173
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcCylindre", array()), 'row');
        echo "
                        ";
        // line 174
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcHauteur", array()), 'row');
        echo "
                        ";
        // line 175
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcLongueur", array()), 'row');
        echo "
                        ";
        // line 176
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcLargeur", array()), 'row');
        echo "
                        ";
        // line 177
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcProvenance", array()), 'row');
        echo "
                        ";
        // line 178
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNbrDebout", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 180
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgRta", array()), 'row');
        echo "
                        ";
        // line 181
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgPatente", array()), 'row');
        echo "
                        ";
        // line 182
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgAni", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 184
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNumCarteViolette", array()), 'row');
        echo "
                        ";
        // line 185
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgLieuCarteViolette", array()), 'row');
        echo "
                        ";
        // line 186
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgDateCarteViolette", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 188
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgDateVignette", array()), 'row');
        echo "
                        ";
        // line 189
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgLieuVignette", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 191
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctTypeVisite", array()), 'row');
        echo "
                        ";
        // line 192
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUtilisation", array()), 'row');
        echo "
                        ";
        // line 193
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVisiteExtra", array()), 'row');
        echo "
                    </div>
                </div>
            </div>
    
            ";
        // line 199
        echo "            <div class=\"col-md-6\">
                <div class=\"box box-primary\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations visite technique</h3>
                    </div>
    
                    <div class=\"box-body\">
                        <div class=\"";
        // line 206
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), 'row');
        echo "
                        </div>
                        ";
        // line 209
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVerificateur", array()), 'row');
        echo "
                        ";
        // line 210
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUsage", array()), 'row');
        echo "
                        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vstDateExpiration", array()), 'row');
        echo "
                        ";
        // line 212
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctAnomalie", array()), 'row');
        echo "
                        <div id=\"form-duree-reparation\" class=\"";
        // line 213
        if ((twig_length_filter($this->env, $this->getAttribute(($context["visite"] ?? $this->getContext($context, "visite")), "ctAnomalie", array())) == 0)) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vstDureeReparation", array()), 'row');
        echo "
                        </div>
                    </div>
                </div>

                ";
        // line 254
        echo "            </div>
        </div>
    
        ";
        // line 258
        echo "        ";
        // line 259
        echo "            ";
        // line 260
        echo "                ";
        // line 261
        echo "                    ";
        // line 262
        echo "                        ";
        // line 263
        echo "                    ";
        // line 264
        echo "                ";
        // line 265
        echo "            ";
        // line 266
        echo "        ";
        // line 267
        echo "        ";
        // line 268
        echo "        <div class=\"row\">
            <div class=\"box box-success\">
                <div class=\"box-body\">
                    <div class=\"col-md-4\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite\"/>
                        <a href=\"";
        // line 273
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_new");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à l'ajout
                        </a>
                    </div>
                    <div class=\"col-md-4\">
                        <input type=\"button\" class=\"btn btn-primary\" id=\"btn-generate-pv-visite\"
                               value=\"Générer PV\" name=\"generate_pv_visite\"/>
                        <span class=\"kl-edit-link-download-pv\" id=\"link-download-pv\"></span>
                        ";
        // line 283
        echo "                    </div>
                </div>
            </div>
        </div>
    ";
        // line 287
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
";
        
        $__internal_349009002d083f9516ac44a7baed1241ca5fd814d100a7184394ca79be5778fa->leave($__internal_349009002d083f9516ac44a7baed1241ca5fd814d100a7184394ca79be5778fa_prof);

        
        $__internal_c8cbc9de23768025f1698add8bcf741dbb0a3f97df781030b70bb70302fc16e6->leave($__internal_c8cbc9de23768025f1698add8bcf741dbb0a3f97df781030b70bb70302fc16e6_prof);

    }

    // line 290
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c84487d948b6094fb3ecec47fa8984d7d6061586348590341ce34ab4c89272b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84487d948b6094fb3ecec47fa8984d7d6061586348590341ce34ab4c89272b6->enter($__internal_c84487d948b6094fb3ecec47fa8984d7d6061586348590341ce34ab4c89272b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a43bcc9fa6c5ac946ca5be2fa6415c76dd3a5f11f930e6f507600fcab65bdad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43bcc9fa6c5ac946ca5be2fa6415c76dd3a5f11f930e6f507600fcab65bdad4->enter($__internal_a43bcc9fa6c5ac946ca5be2fa6415c76dd3a5f11f930e6f507600fcab65bdad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 291
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        var _autocomplete_numero_serie_ajax_uri = \"";
        // line 294
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_serie_ajax");
        echo "\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"";
        // line 295
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_immatriculation_ajax");
        echo "\";
        var _select_verif_by_centre_ajax_uri = \"";
        // line 296
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_verificateur_by_centre_ajax");
        echo "\";
        var _select_expiration_by_usage_ajax_uri = \"";
        // line 297
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_expiration_by_usage_ajax");
        echo "\";
        var _generate_pv_visite_ajax_uri = \"";
        // line 298
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_generate_pv_visite_ajax");
        echo "\"
    </script>

    <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/add.contre.visite.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a43bcc9fa6c5ac946ca5be2fa6415c76dd3a5f11f930e6f507600fcab65bdad4->leave($__internal_a43bcc9fa6c5ac946ca5be2fa6415c76dd3a5f11f930e6f507600fcab65bdad4_prof);

        
        $__internal_c84487d948b6094fb3ecec47fa8984d7d6061586348590341ce34ab4c89272b6->leave($__internal_c84487d948b6094fb3ecec47fa8984d7d6061586348590341ce34ab4c89272b6_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtContreVisite:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  674 => 301,  668 => 298,  664 => 297,  660 => 296,  656 => 295,  652 => 294,  645 => 291,  636 => 290,  624 => 287,  618 => 283,  606 => 273,  599 => 268,  597 => 267,  595 => 266,  593 => 265,  591 => 264,  589 => 263,  587 => 262,  585 => 261,  583 => 260,  581 => 259,  579 => 258,  574 => 254,  566 => 214,  560 => 213,  556 => 212,  552 => 211,  548 => 210,  544 => 209,  539 => 207,  533 => 206,  524 => 199,  516 => 193,  512 => 192,  508 => 191,  503 => 189,  499 => 188,  494 => 186,  490 => 185,  486 => 184,  481 => 182,  477 => 181,  473 => 180,  468 => 178,  464 => 177,  460 => 176,  456 => 175,  452 => 174,  448 => 173,  444 => 172,  440 => 171,  436 => 169,  429 => 164,  425 => 163,  421 => 162,  417 => 161,  411 => 160,  407 => 159,  402 => 157,  398 => 156,  394 => 155,  390 => 154,  386 => 153,  382 => 152,  378 => 151,  374 => 150,  370 => 149,  366 => 148,  362 => 147,  358 => 146,  354 => 145,  346 => 139,  339 => 134,  335 => 133,  331 => 132,  326 => 131,  322 => 129,  317 => 127,  313 => 126,  308 => 124,  303 => 122,  297 => 121,  289 => 115,  283 => 111,  268 => 98,  259 => 95,  254 => 94,  250 => 93,  241 => 87,  231 => 79,  222 => 76,  217 => 75,  213 => 74,  204 => 68,  192 => 58,  189 => 56,  180 => 53,  177 => 52,  172 => 51,  163 => 48,  160 => 47,  155 => 46,  146 => 45,  127 => 40,  116 => 36,  114 => 35,  112 => 34,  106 => 31,  104 => 30,  102 => 29,  100 => 28,  98 => 27,  93 => 24,  86 => 23,  84 => 22,  78 => 21,  74 => 19,  71 => 17,  69 => 16,  60 => 15,  50 => 1,  48 => 43,  46 => 42,  44 => 13,  42 => 12,  40 => 11,  38 => 10,  36 => 9,  34 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Contre visite technique {% endblock %}

{% set menu_contre_visite        = true %}
{% set menu_contre_visite_create = true %}

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

    {# Formulaire recherche #}
    <div class=\"row\" id=\"search-form\">
        <div class=\"col-md-12\">
            <div class=\"box box-default\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Recherche</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <form action=\"{{ path('contre_visite_search_by_immatriculation') }}\" method=\"POST\">
                                <div class=\"form-group\">
                                    <label for=\"ct_numero_immatriculation\">Par numéro d'immatriculation</label>
                                    <select required id=\"ct_numero_immatriculation\"
                                            name=\"ct_numero_immatriculation\" class=\"form-control select2\">
                                        <option value=\"\" disabled selected>Séléctionner numéro immatriculation</option>
                                        {% for numero_immatriculation in list_numero_immatriculation %}
                                            <option value=\"{{ numero_immatriculation.cgImmatriculation }}\">
                                                {{ numero_immatriculation.cgImmatriculation }}
                                            </option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher\" name=\"search_visite\"/>
                                </div>
                            </form>
                        </div>
                        <div class=\"col-md-6\">
                            <form action=\"{{ path('contre_visite_search_by_serie') }}\" method=\"POST\">
                                <div class=\"form-group\">
                                    <label for=\"ct_numero_serie\">Par numéro dans la série du type</label>
                                    <select required id=\"ct_numero_serie\"
                                            name=\"ct_numero_serie\" class=\"form-control select2\">
                                        <option value=\"\" disabled selected>Séléctionner numéro série</option>
                                        {% for numero_serie in list_numero_serie %}
                                            <option value=\"{{ numero_serie.vhcNumSerie }}\">
                                                {{ numero_serie.vhcNumSerie }}
                                            </option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher\" name=\"search_visite\"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        {{ form_row(edit_form.ctCarteGrise.cgDateEmission) }}
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
                        {{ form_row(edit_form.ctCarteGrise.cgMiseEnService) }}
                        <hr>
                        {{ form_row(edit_form.ctCarteGrise.cgIsTransport) }}
                        <div id=\"form-transport\" class=\"{% if visite.ctCarteGrise.cgIsTransport == 0 %}hidden{% endif %}\">
                            {{ form_row(edit_form.ctCarteGrise.cgNomCooperative) }}
                            {{ form_row(edit_form.ctCarteGrise.cgItineraire) }}
                            {{ form_row(edit_form.ctCarteGrise.cgNumVignette) }}
                            {{ form_row(edit_form.ctCarteGrise.ctZoneDeserte) }}
                        </div>
                    </div>
    
                    {# Champs cachés #}
                    <div class=\"hidden\">
                        <input type=\"text\" name=\"ct-visite-id\" id=\"ct-visite-id\"
                               value=\"{{ visite.id }}\" />
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
                        <hr>
                        {{ form_row(edit_form.ctTypeVisite) }}
                        {{ form_row(edit_form.ctUtilisation) }}
                        {{ form_row(edit_form.ctVisiteExtra) }}
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
                        {{ form_row(edit_form.ctVerificateur) }}
                        {{ form_row(edit_form.ctUsage) }}
                        {{ form_row(edit_form.vstDateExpiration) }}
                        {{ form_row(edit_form.ctAnomalie) }}
                        <div id=\"form-duree-reparation\" class=\"{% if visite.ctAnomalie|length == 0 %}hidden{% endif %}\">
                            {{ form_row(edit_form.vstDureeReparation) }}
                        </div>
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
                                    style=\"width: 100%;\" data-placeholder=\"  Choisir\" multiple=\"\" required >
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
        {#<div class=\"row\">#}
            {#<div class=\"col-md-12\">#}
                {#<div class=\"box box-success\">#}
                    {#<div class=\"box-body\">#}
                        {#<input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"update_contre_visite\"/>#}
                    {#</div>#}
                {#</div>#}
            {#</div>#}
        {#</div>#}
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

    <script>
        var _autocomplete_numero_serie_ajax_uri = \"{{ path('carte_grise_show_numero_serie_ajax') }}\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"{{ path('carte_grise_show_numero_immatriculation_ajax') }}\";
        var _select_verif_by_centre_ajax_uri = \"{{ path('visite_select_verificateur_by_centre_ajax') }}\";
        var _select_expiration_by_usage_ajax_uri = \"{{ path('visite_select_expiration_by_usage_ajax') }}\";
        var _generate_pv_visite_ajax_uri = \"{{ path('visite_generate_pv_visite_ajax') }}\"
    </script>

    <script src=\"{{ asset('backoffice/js/add.contre.visite.js') }}\"></script>
{% endblock %}", "AdminBundle:CtContreVisite:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtContreVisite/edit.html.twig");
    }
}
