<?php

/* AdminBundle:CtConstatationAvDedouanement:add.html.twig */
class __TwigTemplate_51d57c1b9bc2daab83781cc581de48eed2ba5915e35f82c6ad4cf3594849405b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtConstatationAvDedouanement:add.html.twig", 1);
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
        $__internal_09f4258afbc28f8871d31a40fef705ab856cb73921f4086bb7ab12260ad56430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f4258afbc28f8871d31a40fef705ab856cb73921f4086bb7ab12260ad56430->enter($__internal_09f4258afbc28f8871d31a40fef705ab856cb73921f4086bb7ab12260ad56430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanement:add.html.twig"));

        $__internal_0a43bf32bdb475973da9370b1ccc78ae7442213c2a02ad4516379fda583ffaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a43bf32bdb475973da9370b1ccc78ae7442213c2a02ad4516379fda583ffaae->enter($__internal_0a43bf32bdb475973da9370b1ccc78ae7442213c2a02ad4516379fda583ffaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanement:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVerificateur", array()), array(0 => $this));
        // line 33
        $context["menu_const_av_ded"] = true;
        // line 34
        $context["menu_const_av_ded_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09f4258afbc28f8871d31a40fef705ab856cb73921f4086bb7ab12260ad56430->leave($__internal_09f4258afbc28f8871d31a40fef705ab856cb73921f4086bb7ab12260ad56430_prof);

        
        $__internal_0a43bf32bdb475973da9370b1ccc78ae7442213c2a02ad4516379fda583ffaae->leave($__internal_0a43bf32bdb475973da9370b1ccc78ae7442213c2a02ad4516379fda583ffaae_prof);

    }

    // line 6
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_87095f4c4522e7ea4c2f766307e16834a13bf8efbe01caff408a604a2d7d4df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87095f4c4522e7ea4c2f766307e16834a13bf8efbe01caff408a604a2d7d4df2->enter($__internal_87095f4c4522e7ea4c2f766307e16834a13bf8efbe01caff408a604a2d7d4df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_96432d210c68f7032b266ab853d63073ab1fbcfdf888adac1535521d109eba2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96432d210c68f7032b266ab853d63073ab1fbcfdf888adac1535521d109eba2e->enter($__internal_96432d210c68f7032b266ab853d63073ab1fbcfdf888adac1535521d109eba2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_96432d210c68f7032b266ab853d63073ab1fbcfdf888adac1535521d109eba2e->leave($__internal_96432d210c68f7032b266ab853d63073ab1fbcfdf888adac1535521d109eba2e_prof);

        
        $__internal_87095f4c4522e7ea4c2f766307e16834a13bf8efbe01caff408a604a2d7d4df2->leave($__internal_87095f4c4522e7ea4c2f766307e16834a13bf8efbe01caff408a604a2d7d4df2_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e030e7180ae3f50b13b86e7e378ce47f3b372bccdc21b9a0690cf92653f0e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e030e7180ae3f50b13b86e7e378ce47f3b372bccdc21b9a0690cf92653f0e40->enter($__internal_5e030e7180ae3f50b13b86e7e378ce47f3b372bccdc21b9a0690cf92653f0e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95274e234cba81c9431a32c2430222e3d89021fc4c8778792b1d3593a9188729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95274e234cba81c9431a32c2430222e3d89021fc4c8778792b1d3593a9188729->enter($__internal_95274e234cba81c9431a32c2430222e3d89021fc4c8778792b1d3593a9188729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
        
        $__internal_95274e234cba81c9431a32c2430222e3d89021fc4c8778792b1d3593a9188729->leave($__internal_95274e234cba81c9431a32c2430222e3d89021fc4c8778792b1d3593a9188729_prof);

        
        $__internal_5e030e7180ae3f50b13b86e7e378ce47f3b372bccdc21b9a0690cf92653f0e40->leave($__internal_5e030e7180ae3f50b13b86e7e378ce47f3b372bccdc21b9a0690cf92653f0e40_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_3be1a8fd72f8cd119ce03f565d1b5314192ed8f8d5cab3027dcd1d8b9d983d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be1a8fd72f8cd119ce03f565d1b5314192ed8f8d5cab3027dcd1d8b9d983d2d->enter($__internal_3be1a8fd72f8cd119ce03f565d1b5314192ed8f8d5cab3027dcd1d8b9d983d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09607fbb31d3083dc579911200398193562f643d636ed2eaabd25192cce791bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09607fbb31d3083dc579911200398193562f643d636ed2eaabd25192cce791bf->enter($__internal_09607fbb31d3083dc579911200398193562f643d636ed2eaabd25192cce791bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    ";
        // line 49
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Feuille de caisse</h3>
                </div>

                <div class=\"box-body\">
                    <form id=\"ct_fdc_form\">
                        <div class=\"modal-body\">

                            <!-- Année -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_fdc_date\">Séléctionner la date</label>
                                    <input required id=\"ct_fdc_date\" name=\"ct_fdc_date\" class=\"form-control datepicker\"
                                           value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "\" />
                                </div>
                            </div>
                                <!-- Centre -->
                            <div class=\"";
        // line 69
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_fdc_centre\">Séléctionner le centre</label>
                                        <select id=\"ct_fdc_centre\" name=\"ct_fdc_centre\" class=\"form-control select2\"
                                                style=\"width: 100%;\" data-placeholder=\"Choisir\" required>
                                                <option value=\"\" selected=\"selected\">
                                                    Choisir
                                                </option>
                                                ";
        // line 80
        echo "                                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? $this->getContext($context, "centres")));
        foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
            // line 81
            echo "                                                            ";
            // line 82
            echo "                                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
            echo "\">
                                                                    ";
            // line 83
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array())), "html", null, true);
            echo "
                                                                </option>
                                                            ";
            // line 86
            echo "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                                                    ";
        // line 89
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\"
                                            id=\"btn-generate-feuille-caisse\" style=\"\">
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-5\">
                                    <span class=\"pull-left\" id=\"link-download-feuille-caisse\"></span>
                                </div>
                                <div class=\"col-md-5\">
                                    <span class=\"pull-right\" id=\"link-download-feuille-caisse-omavet\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        ";
        // line 115
        echo "        <div class=\"col-md-6\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Fiche de Controle</h3>
                </div>

                <div class=\"box-body\">
                    <form>
                        <div class=\"modal-body\">
                            <!-- Année -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_date_verif\">Séléctionner la date</label>
                                    <input required id=\"ct_date_verif\" name=\"ct_date_verif\" class=\"form-control datepicker\"
                                           value=\"26/10/2017\" />
                                </div>
                            </div>

                            <!-- Centre -->
                        <div class=\"";
        // line 134
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_verif_centre\">Séléctionner le centre</label>
                                    <select required id=\"ct_verif_centre\" name=\"ct_verif_centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\">
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            ";
        // line 145
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? $this->getContext($context, "centres")));
        foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
            // line 146
            echo "                                                        ";
            // line 147
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
            echo "\">
                                                                ";
            // line 148
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array())), "html", null, true);
            echo "
                                                            </option>
                                                        ";
            // line 151
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                                                ";
        // line 154
        echo "                                    </select>
                                </div>
                            </div>
                        </div>

                            <!-- Verificateur -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_verif\">Séléctionner verificateur</label>
                                    <select required id=\"ct_verif\" name=\"ct_verif\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\">
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verificateurs"] ?? $this->getContext($context, "verificateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["verif"]) {
            // line 169
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["verif"], "id", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 170
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["verif"], "usrName", array())), "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['verif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\"
                                            id=\"btn-generate-fiche-verif\">
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-offset-2 col-md-6\">
                                    <span class=\"pull-left\" id=\"link-download-fiche-verif\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading text-center\"><h3>Caractéristiques du véhicule</h3></div>
        <div class=\"panel-body\">
            ";
        // line 198
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"row\">
                ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctConstAvDedCaracs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cadc"]) {
            // line 201
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctGenre", array()), array(0 => $this));
            // line 202
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctMarque", array()), array(0 => $this));
            // line 203
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctSourceEnergie", array()), array(0 => $this));
            // line 204
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctCarosserie", array()), array(0 => $this));
            // line 205
            echo "                <div class=\"col-md-4\">
                    <div class=\"box box-success\">
                        <div class=\"box-body\">
                            <div class=\"form-group\">
                                ";
            // line 209
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctConstAvDedType", array()), 'widget', array("attr" => array("class" => "form-control hide")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 212
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadInputCaracType", array()), 'widget', array("attr" => array("class" => "form-control kl-select-cadt")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 215
            if (($this->getAttribute($this->getAttribute($context["cadc"], "vars", array()), "id", array()) == "ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1")) {
                // line 216
                echo "                                    <a href=\"javascript:void(0)\" class=\"btn btn-primary\" id=\"id-clear-carte-grise\">
                                        Pas de carte grise
                                    </a>
                                ";
            } else {
                // line 220
                echo "                                    <div class=\"kl-padding-top\"></div>
                                ";
            }
            // line 222
            echo "                            </div>
                            <div class=\"form-group\">
                                ";
            // line 224
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPremiereCircule", array()), 'label');
            echo "
                                ";
            // line 225
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPremiereCircule", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 228
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctGenre", array()), 'label');
            echo "
                                ";
            // line 229
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctGenre", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 232
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctMarque", array()), 'label');
            echo "
                                ";
            // line 233
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctMarque", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 236
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadTypeCar", array()), 'label');
            echo "
                                ";
            // line 237
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadTypeCar", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 240
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumSerieType", array()), 'label');
            echo "
                                ";
            // line 241
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumSerieType", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 244
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumMoteur", array()), 'label');
            echo "
                                ";
            // line 245
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumMoteur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 248
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctSourceEnergie", array()), 'label');
            echo "
                                ";
            // line 249
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctSourceEnergie", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 252
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadCylindre", array()), 'label');
            echo "
                                ";
            // line 253
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadCylindre", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 256
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPuissance", array()), 'label');
            echo "
                                ";
            // line 257
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPuissance", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 260
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctCarosserie", array()), 'label');
            echo "
                                ";
            // line 261
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctCarosserie", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 264
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNbrAssis", array()), 'label');
            echo "
                                ";
            // line 265
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNbrAssis", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <hr/>
                            <div class=\"form-group\">
                                ";
            // line 269
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLargeur", array()), 'label');
            echo "
                                ";
            // line 270
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLargeur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 273
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadHauteur", array()), 'label');
            echo "
                                ";
            // line 274
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadHauteur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 277
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLongueur", array()), 'label');
            echo "
                                ";
            // line 278
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLongueur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <hr/>
                            <div class=\"form-group\">
                                ";
            // line 282
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadChargeUtile", array()), 'label');
            echo "
                                ";
            // line 283
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadChargeUtile", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 286
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsVide", array()), 'label');
            echo "
                                ";
            // line 287
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsVide", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 290
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsTotalCharge", array()), 'label');
            echo "
                                ";
            // line 291
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsTotalCharge", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group hidden\">
                                ";
            // line 294
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsMaxima", array()), 'label');
            echo "
                                ";
            // line 295
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
        // line 301
        echo "            </div>
            <div class=\"kl-cav\">
                <div class=\"col-md-12\">
                    ";
        // line 305
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVerificateur", array()), 'row');
        echo "
                        ";
        // line 306
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadImmatriculation", array()), 'row');
        echo "
                        ";
        // line 307
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadProvenance", array()), 'row');
        echo "
                        ";
        // line 308
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadDateEmbarquement", array()), 'row');
        echo "
                        ";
        // line 309
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadLieuEmbarquement", array()), 'row');
        echo "
                        ";
        // line 310
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadProprietaireNom", array()), 'row');
        echo "
                        ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadProprietaireAdresse", array()), 'row');
        echo "
                        ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadDivers", array()), 'row');
        echo "
                        ";
        // line 313
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadObservation", array()), 'row');
        echo "
                        ";
        // line 314
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadConforme", array()), 'row');
        echo "
                        ";
        // line 315
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadBonEtat", array()), 'row');
        echo "
                        ";
        // line 316
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadSecPers", array()), 'row');
        echo "
                        ";
        // line 317
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadSecMarch", array()), 'row');
        echo "
                        ";
        // line 318
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadProtecEnv", array()), 'row');
        echo "
                    ";
        // line 320
        echo "                </div>
            </div>
            ";
        // line 361
        echo "        </div>

        <div class=\"box-footer\">
            ";
        // line 364
        if (array_key_exists("is_generated", $context)) {
            // line 365
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_generer_pv", array("id" => $this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"
                   class=\"btn btn-primary\" >
                    Générer PV
                </a>
            ";
        } else {
            // line 370
            echo "                <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
            ";
        }
        // line 372
        echo "            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_index");
        echo "\"
               class=\"btn btn-default pull-left btn-mini-rectif\" >
                Retour à la liste
            </a>
        </div>
        ";
        // line 377
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_09607fbb31d3083dc579911200398193562f643d636ed2eaabd25192cce791bf->leave($__internal_09607fbb31d3083dc579911200398193562f643d636ed2eaabd25192cce791bf_prof);

        
        $__internal_3be1a8fd72f8cd119ce03f565d1b5314192ed8f8d5cab3027dcd1d8b9d983d2d->leave($__internal_3be1a8fd72f8cd119ce03f565d1b5314192ed8f8d5cab3027dcd1d8b9d983d2d_prof);

    }

    // line 381
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01d524b73803853ea23b3848ca778b34c8f9a8da7b069d354352048448ee3c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d524b73803853ea23b3848ca778b34c8f9a8da7b069d354352048448ee3c38->enter($__internal_01d524b73803853ea23b3848ca778b34c8f9a8da7b069d354352048448ee3c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3eab058678709f275b7c1181b59c75c5579215ed0bfd6377190136d7c07cc38c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eab058678709f275b7c1181b59c75c5579215ed0bfd6377190136d7c07cc38c->enter($__internal_3eab058678709f275b7c1181b59c75c5579215ed0bfd6377190136d7c07cc38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 382
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>

    <script>
        var _generate_feuille_caisse_ajax_uri = \"";
        // line 388
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_generate_reporting_feuille_caisse_ajax");
        echo "\";
        var _select_verif_by_centre_ajax_uri = \"";
        // line 389
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_verificateur_by_centre_ajax");
        echo "\";
        var _generate_fiche_ctrl_verif_ajax_uri = \"";
        // line 390
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_generate_reporting_fiche_controle_ajax");
        echo "\";
    </script>

    <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/add.constatation.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3eab058678709f275b7c1181b59c75c5579215ed0bfd6377190136d7c07cc38c->leave($__internal_3eab058678709f275b7c1181b59c75c5579215ed0bfd6377190136d7c07cc38c_prof);

        
        $__internal_01d524b73803853ea23b3848ca778b34c8f9a8da7b069d354352048448ee3c38->leave($__internal_01d524b73803853ea23b3848ca778b34c8f9a8da7b069d354352048448ee3c38_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtConstatationAvDedouanement:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  783 => 393,  777 => 390,  773 => 389,  769 => 388,  763 => 385,  756 => 382,  747 => 381,  734 => 377,  725 => 372,  721 => 370,  712 => 365,  710 => 364,  705 => 361,  701 => 320,  697 => 318,  693 => 317,  689 => 316,  685 => 315,  681 => 314,  677 => 313,  673 => 312,  669 => 311,  665 => 310,  661 => 309,  657 => 308,  653 => 307,  649 => 306,  644 => 305,  639 => 301,  627 => 295,  623 => 294,  617 => 291,  613 => 290,  607 => 287,  603 => 286,  597 => 283,  593 => 282,  586 => 278,  582 => 277,  576 => 274,  572 => 273,  566 => 270,  562 => 269,  555 => 265,  551 => 264,  545 => 261,  541 => 260,  535 => 257,  531 => 256,  525 => 253,  521 => 252,  515 => 249,  511 => 248,  505 => 245,  501 => 244,  495 => 241,  491 => 240,  485 => 237,  481 => 236,  475 => 233,  471 => 232,  465 => 229,  461 => 228,  455 => 225,  451 => 224,  447 => 222,  443 => 220,  437 => 216,  435 => 215,  429 => 212,  423 => 209,  417 => 205,  414 => 204,  411 => 203,  408 => 202,  405 => 201,  401 => 200,  396 => 198,  369 => 173,  360 => 170,  355 => 169,  351 => 168,  335 => 154,  333 => 152,  327 => 151,  322 => 148,  317 => 147,  315 => 146,  310 => 145,  296 => 134,  275 => 115,  248 => 89,  246 => 87,  240 => 86,  235 => 83,  230 => 82,  228 => 81,  223 => 80,  209 => 69,  202 => 65,  184 => 49,  181 => 47,  172 => 44,  169 => 43,  164 => 42,  155 => 39,  152 => 38,  147 => 37,  138 => 36,  119 => 31,  108 => 27,  106 => 26,  104 => 25,  98 => 22,  96 => 21,  94 => 20,  92 => 19,  90 => 18,  85 => 15,  78 => 14,  76 => 13,  70 => 12,  66 => 10,  63 => 8,  61 => 7,  52 => 6,  42 => 1,  40 => 34,  38 => 33,  36 => 4,  34 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}
{% form_theme form.ctVerificateur _self %}

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

    {# Formulaire génération feuille de caiise #}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Feuille de caisse</h3>
                </div>

                <div class=\"box-body\">
                    <form id=\"ct_fdc_form\">
                        <div class=\"modal-body\">

                            <!-- Année -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_fdc_date\">Séléctionner la date</label>
                                    <input required id=\"ct_fdc_date\" name=\"ct_fdc_date\" class=\"form-control datepicker\"
                                           value=\"{{ \"now\"|date(\"d/m/Y\") }}\" />
                                </div>
                            </div>
                                <!-- Centre -->
                            <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_fdc_centre\">Séléctionner le centre</label>
                                        <select id=\"ct_fdc_centre\" name=\"ct_fdc_centre\" class=\"form-control select2\"
                                                style=\"width: 100%;\" data-placeholder=\"Choisir\" required>
                                                <option value=\"\" selected=\"selected\">
                                                    Choisir
                                                </option>
                                                {# {% for province in provinces %}
                                                    <optgroup label=\"{{ province.prvNom }}\"> #}
                                                        {% for centre in centres %}
                                                            {# {% if province.id == centre.ctProvince.id %} #}
                                                                <option value=\"{{ centre.id }}\">
                                                                    {{ centre.ctrNom|upper }}
                                                                </option>
                                                            {# {% endif %} #}
                                                        {% endfor %}
                                                    {# </optgroup>
                                                {% endfor %} #}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\"
                                            id=\"btn-generate-feuille-caisse\" style=\"\">
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-5\">
                                    <span class=\"pull-left\" id=\"link-download-feuille-caisse\"></span>
                                </div>
                                <div class=\"col-md-5\">
                                    <span class=\"pull-right\" id=\"link-download-feuille-caisse-omavet\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {# Formulaire generation Fiche de Controle Verificateur #}
        <div class=\"col-md-6\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Fiche de Controle</h3>
                </div>

                <div class=\"box-body\">
                    <form>
                        <div class=\"modal-body\">
                            <!-- Année -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_date_verif\">Séléctionner la date</label>
                                    <input required id=\"ct_date_verif\" name=\"ct_date_verif\" class=\"form-control datepicker\"
                                           value=\"26/10/2017\" />
                                </div>
                            </div>

                            <!-- Centre -->
                        <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_verif_centre\">Séléctionner le centre</label>
                                    <select required id=\"ct_verif_centre\" name=\"ct_verif_centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\">
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            {# {% for province in provinces %}
                                                <optgroup label=\"{{ province.prvNom }}\"> #}
                                                    {% for centre in centres %}
                                                        {# {% if province.id == centre.ctProvince.id %} #}
                                                            <option value=\"{{ centre.id }}\">
                                                                {{ centre.ctrNom|upper }}
                                                            </option>
                                                        {# {% endif %} #}
                                                    {% endfor %}
                                                {# </optgroup>
                                            {% endfor %} #}
                                    </select>
                                </div>
                            </div>
                        </div>

                            <!-- Verificateur -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_verif\">Séléctionner verificateur</label>
                                    <select required id=\"ct_verif\" name=\"ct_verif\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\">
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            {% for verif in verificateurs %}
                                                <option value=\"{{ verif.id }}\">
                                                    {{ verif.usrName|upper }}
                                                </option>
                                            {% endfor %}
                                    </select>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\"
                                            id=\"btn-generate-fiche-verif\">
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-offset-2 col-md-6\">
                                    <span class=\"pull-left\" id=\"link-download-fiche-verif\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading text-center\"><h3>Caractéristiques du véhicule</h3></div>
        <div class=\"panel-body\">
            {{ form_start(form) }}
            <div class=\"row\">
                {% for cadc in form.ctConstAvDedCaracs %}
                    {% form_theme cadc.ctGenre _self %}
                    {% form_theme cadc.ctMarque _self %}
                    {% form_theme cadc.ctSourceEnergie _self %}
                    {% form_theme cadc.ctCarosserie _self %}
                <div class=\"col-md-4\">
                    <div class=\"box box-success\">
                        <div class=\"box-body\">
                            <div class=\"form-group\">
                                {{ form_widget(cadc.ctConstAvDedType, {'attr': {'class': 'form-control hide'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(cadc.cadInputCaracType, {'attr': {'class': 'form-control kl-select-cadt'}})}}
                            </div>
                            <div class=\"form-group\">
                                {% if cadc.vars.id == 'ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1' %}
                                    <a href=\"javascript:void(0)\" class=\"btn btn-primary\" id=\"id-clear-carte-grise\">
                                        Pas de carte grise
                                    </a>
                                {% else %}
                                    <div class=\"kl-padding-top\"></div>
                                {% endif %}
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
                            <div class=\"form-group hidden\">
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
                        {{ form_row(form.ctVerificateur ) }}
                        {{ form_row(form.cadImmatriculation ) }}
                        {{ form_row(form.cadProvenance) }}
                        {{ form_row(form.cadDateEmbarquement) }}
                        {{ form_row(form.cadLieuEmbarquement) }}
                        {{ form_row(form.cadProprietaireNom) }}
                        {{ form_row(form.cadProprietaireAdresse) }}
                        {{ form_row(form.cadDivers) }}
                        {{ form_row(form.cadObservation) }}
                        {{ form_row(form.cadConforme) }}
                        {{ form_row(form.cadBonEtat) }}
                        {{ form_row(form.cadSecPers) }}
                        {{ form_row(form.cadSecMarch) }}
                        {{ form_row(form.cadProtecEnv) }}
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
                </div>
            </div>
            {% endif %} #}
        </div>

        <div class=\"box-footer\">
            {% if is_generated is defined %}
                <a href=\"{{ path('const_av_ded_generer_pv', { 'id': const_av_ded.id }) }}\" target=\"_blank\"
                   class=\"btn btn-primary\" >
                    Générer PV
                </a>
            {% else %}
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
            {% endif %}
            <a href=\"{{ path('const_av_ded_index') }}\"
               class=\"btn btn-default pull-left btn-mini-rectif\" >
                Retour à la liste
            </a>
        </div>
        {{ form_end(form) }}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>

    <script>
        var _generate_feuille_caisse_ajax_uri = \"{{ path('const_av_ded_generate_reporting_feuille_caisse_ajax') }}\";
        var _select_verif_by_centre_ajax_uri = \"{{ path('visite_select_verificateur_by_centre_ajax') }}\";
        var _generate_fiche_ctrl_verif_ajax_uri = \"{{ path('const_av_ded_generate_reporting_fiche_controle_ajax') }}\";
    </script>

    <script src=\"{{ asset('backoffice/js/add.constatation.js') }}\"></script>
{% endblock %}", "AdminBundle:CtConstatationAvDedouanement:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtConstatationAvDedouanement/add.html.twig");
    }
}
