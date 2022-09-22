<?php

/* @Admin/CtImprimeTechUse/used.html.twig */
class __TwigTemplate_cf2d08cf0c49476540536be1b83ccf8e68a4379c958492e2b95a422a9c6c8ee6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtImprimeTechUse/used.html.twig", 1);
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
        $__internal_2a83d118b41dbfb88e690dd5b4526e8d7e37fd93a6431a3e2778a2b36a006b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a83d118b41dbfb88e690dd5b4526e8d7e37fd93a6431a3e2778a2b36a006b58->enter($__internal_2a83d118b41dbfb88e690dd5b4526e8d7e37fd93a6431a3e2778a2b36a006b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTechUse/used.html.twig"));

        $__internal_f7a0b9fca6fa4f84c6bfeaaa289252d64ef0cc7c1e3e27a608ac3d27f3ac92f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a0b9fca6fa4f84c6bfeaaa289252d64ef0cc7c1e3e27a608ac3d27f3ac92f5->enter($__internal_f7a0b9fca6fa4f84c6bfeaaa289252d64ef0cc7c1e3e27a608ac3d27f3ac92f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTechUse/used.html.twig"));

        // line 5
        $context["menu_imprime_tech_use"] = true;
        // line 6
        $context["menu_imprime_tech_use_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a83d118b41dbfb88e690dd5b4526e8d7e37fd93a6431a3e2778a2b36a006b58->leave($__internal_2a83d118b41dbfb88e690dd5b4526e8d7e37fd93a6431a3e2778a2b36a006b58_prof);

        
        $__internal_f7a0b9fca6fa4f84c6bfeaaa289252d64ef0cc7c1e3e27a608ac3d27f3ac92f5->leave($__internal_f7a0b9fca6fa4f84c6bfeaaa289252d64ef0cc7c1e3e27a608ac3d27f3ac92f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f123902fb778250579b69e60484e4f0018d5a6c4c59435dea82b81b34f7ef376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f123902fb778250579b69e60484e4f0018d5a6c4c59435dea82b81b34f7ef376->enter($__internal_f123902fb778250579b69e60484e4f0018d5a6c4c59435dea82b81b34f7ef376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be7c5a019b1f124c916df904e0d9a8536fe5eb9c0b75579386ba62699b86903c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7c5a019b1f124c916df904e0d9a8536fe5eb9c0b75579386ba62699b86903c->enter($__internal_be7c5a019b1f124c916df904e0d9a8536fe5eb9c0b75579386ba62699b86903c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Mise à jour utilisation des imprimés ";
        
        $__internal_be7c5a019b1f124c916df904e0d9a8536fe5eb9c0b75579386ba62699b86903c->leave($__internal_be7c5a019b1f124c916df904e0d9a8536fe5eb9c0b75579386ba62699b86903c_prof);

        
        $__internal_f123902fb778250579b69e60484e4f0018d5a6c4c59435dea82b81b34f7ef376->leave($__internal_f123902fb778250579b69e60484e4f0018d5a6c4c59435dea82b81b34f7ef376_prof);

    }

    // line 8
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_689b66c86b078dbcc97b26ad2ba62a386c444c03fb1f58ae36bb601b04dc3113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_689b66c86b078dbcc97b26ad2ba62a386c444c03fb1f58ae36bb601b04dc3113->enter($__internal_689b66c86b078dbcc97b26ad2ba62a386c444c03fb1f58ae36bb601b04dc3113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d887b5626e304c78438b8d3abf0b43bc64cd984bc1cb5f1490bd10e196395792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d887b5626e304c78438b8d3abf0b43bc64cd984bc1cb5f1490bd10e196395792->enter($__internal_d887b5626e304c78438b8d3abf0b43bc64cd984bc1cb5f1490bd10e196395792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_d887b5626e304c78438b8d3abf0b43bc64cd984bc1cb5f1490bd10e196395792->leave($__internal_d887b5626e304c78438b8d3abf0b43bc64cd984bc1cb5f1490bd10e196395792_prof);

        
        $__internal_689b66c86b078dbcc97b26ad2ba62a386c444c03fb1f58ae36bb601b04dc3113->leave($__internal_689b66c86b078dbcc97b26ad2ba62a386c444c03fb1f58ae36bb601b04dc3113_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9230f47251f1b098b0a1273388550115d7612f783ee54d6e8edd294fa251bf73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9230f47251f1b098b0a1273388550115d7612f783ee54d6e8edd294fa251bf73->enter($__internal_9230f47251f1b098b0a1273388550115d7612f783ee54d6e8edd294fa251bf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f90ceffd85d5ee590c32d6f4367b4e04c13b9edf1fb77775e5b0f07808c2a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f90ceffd85d5ee590c32d6f4367b4e04c13b9edf1fb77775e5b0f07808c2a2e->enter($__internal_7f90ceffd85d5ee590c32d6f4367b4e04c13b9edf1fb77775e5b0f07808c2a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    ";
        // line 55
        echo "
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Mise à jour utilisation des imprimés </h3>
                </div>

                <div class=\"box-body\">
                    <form id=\"uit_form\" action=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_new");
        echo "\" method=\"POST\">
                        <div class=\"modal-body\">
                            <!-- Année -->
                            ";
        // line 74
        echo "
                            <!-- Centre -->
                            <div class=\"";
        // line 76
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN")) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_APPROVISIONNEMENT")))) {
            echo "hidden";
        }
        echo "\">
                                <div class=\"row\">
                                    <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                        <label for=\"ct_uit_centre\">Sélectionner le centre</label>
                                        <select id=\"ct_uit_centre\" name=\"ct_uit_centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\" ";
        // line 81
        echo ">
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? $this->getContext($context, "provinces")));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 86
            echo "                                            <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "\">
                                                ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? $this->getContext($context, "centres")));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 88
                echo "                                                    ";
                // line 89
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
                echo "\">
                                                            ";
                // line 90
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array())), "html", null, true);
                echo "
                                                        </option>
                                                    ";
                // line 93
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                                            </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
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
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["visites"] ?? $this->getContext($context, "visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
            // line 138
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["visite"], "id", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 139
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["visite"], "id", array())), "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                                        </optgroup>
                                        <optgroup label=\"Réceptions\">
                                        </optgroup>
                                        <optgroup label=\"Constatations\">
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
                                        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprimes"] ?? $this->getContext($context, "imprimes")));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime"]) {
            // line 158
            echo "                                        <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime"], "nomImprimeTech", array())), "html", null, true);
            echo "\">
                                            ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["useds_it"] ?? $this->getContext($context, "useds_it")));
            foreach ($context['_seq'] as $context["_key"] => $context["used_it"]) {
                // line 160
                echo "                                                ";
                if (($this->getAttribute($context["imprime"], "id", array()) == $this->getAttribute($this->getAttribute($context["used_it"], "ctImprimeTech", array()), "id", array()))) {
                    // line 161
                    echo "                                                ";
                    // line 162
                    echo "                                                ";
                    // line 163
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["used_it"], "id", array()), "html", null, true);
                    echo "\">
                                                    ";
                    // line 164
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["used_it"], "ituNumero", array())), "html", null, true);
                    echo "
                                                </option>
                                                ";
                    // line 167
                    echo "                                                ";
                }
                // line 168
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['used_it'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                                        </optgroup>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <div class=\"box-body\">
                                        <div class=\"form-group\" style=\"margin: 0 0 8px 0; padding: 0 0 8px 0;\">
                                            ";
        // line 180
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
        
        $__internal_7f90ceffd85d5ee590c32d6f4367b4e04c13b9edf1fb77775e5b0f07808c2a2e->leave($__internal_7f90ceffd85d5ee590c32d6f4367b4e04c13b9edf1fb77775e5b0f07808c2a2e_prof);

        
        $__internal_9230f47251f1b098b0a1273388550115d7612f783ee54d6e8edd294fa251bf73->leave($__internal_9230f47251f1b098b0a1273388550115d7612f783ee54d6e8edd294fa251bf73_prof);

    }

    // line 197
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eef3d751cd3e6611fdf19492542621c4984820f853e78bba2230d492bfd4f3ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef3d751cd3e6611fdf19492542621c4984820f853e78bba2230d492bfd4f3ad->enter($__internal_eef3d751cd3e6611fdf19492542621c4984820f853e78bba2230d492bfd4f3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e97daac106ea59305a5dd125168b62ab9d87b40afcdfb846cd882d284e08c456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97daac106ea59305a5dd125168b62ab9d87b40afcdfb846cd882d284e08c456->enter($__internal_e97daac106ea59305a5dd125168b62ab9d87b40afcdfb846cd882d284e08c456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 198
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Mise à jour multiple d'utilisation IT -->
    <!-- JQuery UI -->
    <script>
        var _senddata_new_utilisation_it_ajax = \"";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_new");
        echo "\";
    </script>
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
";
        
        $__internal_e97daac106ea59305a5dd125168b62ab9d87b40afcdfb846cd882d284e08c456->leave($__internal_e97daac106ea59305a5dd125168b62ab9d87b40afcdfb846cd882d284e08c456_prof);

        
        $__internal_eef3d751cd3e6611fdf19492542621c4984820f853e78bba2230d492bfd4f3ad->leave($__internal_eef3d751cd3e6611fdf19492542621c4984820f853e78bba2230d492bfd4f3ad_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtImprimeTechUse/used.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 205,  449 => 203,  440 => 198,  431 => 197,  406 => 180,  396 => 171,  389 => 169,  383 => 168,  380 => 167,  375 => 164,  370 => 163,  368 => 162,  366 => 161,  363 => 160,  359 => 159,  354 => 158,  350 => 157,  333 => 142,  324 => 139,  319 => 138,  315 => 137,  272 => 96,  265 => 94,  259 => 93,  254 => 90,  249 => 89,  247 => 88,  243 => 87,  238 => 86,  234 => 85,  228 => 81,  218 => 76,  214 => 74,  208 => 64,  197 => 55,  194 => 49,  185 => 46,  182 => 45,  177 => 44,  168 => 41,  165 => 40,  160 => 39,  151 => 36,  148 => 35,  143 => 34,  134 => 33,  123 => 29,  121 => 28,  119 => 27,  113 => 24,  111 => 23,  109 => 22,  107 => 21,  105 => 20,  100 => 17,  93 => 16,  91 => 15,  85 => 14,  81 => 12,  78 => 10,  76 => 9,  67 => 8,  48 => 3,  38 => 1,  36 => 6,  34 => 5,  11 => 1,);
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

    {# {% if message != \"\" %}
        <div class=\"{% if statu == 'success' %}callout callout-success{% endif %}\">
            {{ message }}
        </div>
    {% endif %} #}

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
                                        </optgroup>
                                        <optgroup label=\"Constatations\">
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
{% endblock %}", "@Admin/CtImprimeTechUse/used.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTechUse\\used.html.twig");
    }
}
