<?php

/* @Admin/CtImprimeTechUse/used.html.twig */
class __TwigTemplate_996e0b0409e2784a5401cdf1d083a5e89fa5b6e5cde135d5dad752f9084af65d extends Twig_Template
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
        // line 5
        $context["menu_imprime_tech_use"] = true;
        // line 6
        $context["menu_imprime_tech_use_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Mise à jour utilisation des imprimés ";
    }

    // line 8
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 9
        if ((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 10
            $context["required"] = false;
        }
        // line 12
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 14
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 15
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 16
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 17
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? null) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 20
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 21
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 22
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 23
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 24
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 27
        $context["options"] = ($context["choices"] ?? null);
        // line 28
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 29
        echo "</select>
    </span>";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
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
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN")) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_APPROVISIONNEMENT")))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 81
            echo "                                            <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "\">
                                                ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["visites"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["receptions"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["constatations"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["imprimes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime"]) {
            // line 163
            echo "                                        <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime"], "nomImprimeTech", array())), "html", null, true);
            echo "\">
                                            ";
            // line 164
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["useds_it"] ?? null));
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
    }

    // line 202
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  438 => 210,  433 => 208,  424 => 203,  421 => 202,  402 => 185,  392 => 176,  385 => 174,  379 => 173,  376 => 172,  371 => 169,  366 => 168,  364 => 167,  362 => 166,  359 => 165,  355 => 164,  350 => 163,  346 => 162,  333 => 151,  324 => 148,  319 => 147,  315 => 146,  311 => 144,  302 => 141,  297 => 140,  293 => 139,  289 => 137,  280 => 134,  275 => 133,  271 => 132,  228 => 91,  221 => 89,  215 => 88,  210 => 85,  205 => 84,  203 => 83,  199 => 82,  194 => 81,  190 => 80,  184 => 76,  174 => 71,  170 => 69,  163 => 58,  152 => 49,  143 => 46,  140 => 45,  135 => 44,  126 => 41,  123 => 40,  118 => 39,  109 => 36,  106 => 35,  101 => 34,  98 => 33,  93 => 29,  91 => 28,  89 => 27,  83 => 24,  81 => 23,  79 => 22,  77 => 21,  75 => 20,  70 => 17,  63 => 16,  61 => 15,  55 => 14,  51 => 12,  48 => 10,  46 => 9,  43 => 8,  36 => 3,  32 => 1,  30 => 6,  28 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Admin/CtImprimeTechUse/used.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTechUse\\used.html.twig");
    }
}
