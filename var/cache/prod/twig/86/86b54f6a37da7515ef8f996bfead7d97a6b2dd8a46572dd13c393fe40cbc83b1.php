<?php

/* @Admin/CtImprimeTechUse/search.html.twig */
class __TwigTemplate_21bd629e7f91cce9423816df328e385a50a5446dae7659bc6aba8b4a405b5468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtImprimeTechUse/search.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        // line 12
        $context["menu_imprime_tech_use"] = true;
        // line 13
        $context["menu_imprime_tech_use_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche imprimé technique ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"Stylesheet\"></link>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-success\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    ";
        // line 27
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_search");
        echo "\" method=\"POST\">
        <div class=\"row\" id=\"search-form\">
            <div class=\"col-md-12\">
                <div class=\"box box-default\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Recherche</h3>
                    </div>

                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"ct_imprime_tech_id\">Type d'imprimé technique</label>
                                        <select required id=\"ct_imprime_tech_id\" name=\"ct_imprime_tech_id\" class=\"form-control select2\" >
                                        <option value=\"\" disabled selected>Sélectionner imprimé technique</option>
                                            ";
        // line 42
        if ((($context["ct_imprime_tech_id"] ?? null) && ($context["nomImprimeTech"] ?? null))) {
            // line 43
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, ($context["ct_imprime_tech_id"] ?? null), "html", null, true);
            echo "\" selected>
                                                    ";
            // line 44
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["nomImprimeTech"] ?? null)), "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        // line 47
        echo "
                                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_its"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["list_it"]) {
            // line 49
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["list_it"], "id", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 50
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["list_it"], "nomImprimeTech", array())), "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_it'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"itu_numero\">Par numéro d'imprimé technique</label>
                                    <input id=\"itu_numero\" name=\"itu_numero\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["itu_numero"] ?? null), "html", null, true);
        echo "\"
                                        class=\"form-control\" />
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-2\">
                                <div class=\"box-body\">
                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            Rechercher
                                        </button>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 74
        if (($context["imprime"] ?? null)) {
            // line 75
            echo "                            <div class=\"col-md-2\">
                                <div class=\"box-body\">
                                    <div class=\"form-group\">
                                        <a class=\"btn btn-warning\" title=\"Modifier\"
                                           href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_edit", array("id" => $this->getAttribute(($context["imprime"] ?? null), "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                            Modifier
                                        </a>
                                    </div>
                                </div>
                            </div>
                            ";
            // line 86
            if ($this->getAttribute(($context["imprime"] ?? null), "ituUsed", array())) {
                // line 87
                echo "                            <div class=\"col-md-2\">
                                <div class=\"box-body\">
                                    <div class=\"form-group\">
                                        <a class=\"btn btn-default\" title=\"Annuler utilisation\"
                                        href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_reset", array("id" => $this->getAttribute(($context["imprime"] ?? null), "id", array()))), "html", null, true);
                echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                            Annuler utilisation
                                        </a>
                                    </div>
                                </div>
                            </div>
                            ";
            }
            // line 99
            echo "                            ";
        }
        // line 100
        echo "                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\" >
                                <a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_index");
        echo "\" class=\"btn btn-light\" >
                                    Retour à la liste
                                </a>

                                <a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_new");
        echo "\" class=\"btn btn-info\" >
                                    Retour à l'ajout multiple
                                </a>
                            </div>
                        </div>
                        ";
        // line 112
        if (($context["imprime"] ?? null)) {
            // line 113
            echo "                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"box box-primary\">
                                    <div class=\"box-header\">
                                        <h3 class=\"box-title\">Détail de l'imprimé technique</h3>
                                    </div>

                                    <div class=\"box-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>N° bordereau d'envoi</label>
                                                    <input value=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["imprime"] ?? null), "ctBordereau", array()), "blNumero", array()), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>N° de l'imprimé technique</label>
                                                    <input value=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute(($context["imprime"] ?? null), "ituNumero", array()), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>Centre destinataire</label>
                                                    <input value=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["imprime"] ?? null), "ctCentre", array()), "ctrNom", array()), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-check\" style=\"margin:15px 0 0; padding: 15px 0 0 0\">
                                                    <input class=\"form-check-input\" type=\"checkbox\" style=\"margin:0 0 0 4px; padding: 0 0 0 4px;\" ";
            // line 144
            if ($this->getAttribute(($context["imprime"] ?? null), "ituUsed", array())) {
                echo " checked ";
            }
            echo " disabled>
                                                    <label class=\"form-check-label\" for=\"flexCheckCheckedDisabled\">
                                                        &nbsp;&nbsp;Est-utlisé ?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>Imprimé technique</label>
                                                    <input value=\"";
            // line 155
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["imprime"] ?? null), "ctImprimeTech", array()), "nomImprimeTech", array())), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>Motif d'utilisation IT</label>
                                                    <input value=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute(($context["imprime"] ?? null), "ituMotifUsed", array()), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>N° contröle / N° d'enregistrement</label>
                                                    <input value=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute(($context["imprime"] ?? null), "ctControle", array()), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\" style=\"margin: 12px 0 0 0; padding: 12px 0 0 0;\">
                                                    <a class=\"btn btn-warning\" title=\"Modifier\"
                                                    href=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_edit", array("id" => $this->getAttribute(($context["imprime"] ?? null), "id", array()))), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-edit\"></i>
                                                        Modifier
                                                    </a>
                                                    ";
            // line 179
            if ($this->getAttribute(($context["imprime"] ?? null), "ituUsed", array())) {
                // line 180
                echo "                                                    <a class=\"btn btn-default\" title=\"Annuler utilisation\"
                                                    href=\"";
                // line 181
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_reset", array("id" => $this->getAttribute(($context["imprime"] ?? null), "id", array()))), "html", null, true);
                echo "\">
                                                        <i class=\"fa fa-trash\"></i>
                                                        Annuler utilisation
                                                    </a>
                                                    ";
            }
            // line 186
            echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 194
        echo "                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    // line 201
    public function block_javascripts($context, array $blocks = array())
    {
        // line 202
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        var _recuperer_numero_it_ajax_uri = \"";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_search");
        echo "\";
    </script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/search.used_it.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@Admin/CtImprimeTechUse/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 210,  381 => 208,  376 => 206,  368 => 202,  365 => 201,  356 => 194,  346 => 186,  338 => 181,  335 => 180,  333 => 179,  326 => 175,  317 => 169,  306 => 161,  297 => 155,  281 => 144,  273 => 139,  262 => 131,  253 => 125,  239 => 113,  237 => 112,  229 => 107,  222 => 103,  217 => 100,  214 => 99,  203 => 91,  197 => 87,  195 => 86,  185 => 79,  179 => 75,  177 => 74,  159 => 59,  151 => 53,  142 => 50,  137 => 49,  133 => 48,  130 => 47,  124 => 44,  119 => 43,  117 => 42,  98 => 27,  96 => 26,  87 => 23,  84 => 22,  79 => 21,  70 => 18,  67 => 17,  62 => 16,  59 => 15,  53 => 9,  46 => 6,  43 => 5,  36 => 3,  32 => 1,  30 => 13,  28 => 12,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Admin/CtImprimeTechUse/search.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTechUse\\search.html.twig");
    }
}
