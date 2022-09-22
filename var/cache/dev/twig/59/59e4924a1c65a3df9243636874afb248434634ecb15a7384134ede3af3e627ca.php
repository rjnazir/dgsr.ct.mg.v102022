<?php

/* AdminBundle:CtImprimeTechUse:search.html.twig */
class __TwigTemplate_0ccbe4bf200c7c2c302faafb402c95544d66ba949b286ab93bb3bd4166934fac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtImprimeTechUse:search.html.twig", 1);
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
        $__internal_5653e4e2d0581dec0d6122831aaf0e187270f225888e2e0a9f38995d324a579a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5653e4e2d0581dec0d6122831aaf0e187270f225888e2e0a9f38995d324a579a->enter($__internal_5653e4e2d0581dec0d6122831aaf0e187270f225888e2e0a9f38995d324a579a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTechUse:search.html.twig"));

        $__internal_efca40b4b781579bc0610b9f449e801650174ff442bc3d41b4f9a0a4dd050bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efca40b4b781579bc0610b9f449e801650174ff442bc3d41b4f9a0a4dd050bdf->enter($__internal_efca40b4b781579bc0610b9f449e801650174ff442bc3d41b4f9a0a4dd050bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTechUse:search.html.twig"));

        // line 12
        $context["menu_imprime_tech_use"] = true;
        // line 13
        $context["menu_imprime_tech_use_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5653e4e2d0581dec0d6122831aaf0e187270f225888e2e0a9f38995d324a579a->leave($__internal_5653e4e2d0581dec0d6122831aaf0e187270f225888e2e0a9f38995d324a579a_prof);

        
        $__internal_efca40b4b781579bc0610b9f449e801650174ff442bc3d41b4f9a0a4dd050bdf->leave($__internal_efca40b4b781579bc0610b9f449e801650174ff442bc3d41b4f9a0a4dd050bdf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_133c8c6c242aa4222a9ae370c255cfd19b353a7ebf4142537188828f0226b126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133c8c6c242aa4222a9ae370c255cfd19b353a7ebf4142537188828f0226b126->enter($__internal_133c8c6c242aa4222a9ae370c255cfd19b353a7ebf4142537188828f0226b126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1aa549389ccdcfa8758912975643b7519d1895bfafb64306b4951f21e764b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1aa549389ccdcfa8758912975643b7519d1895bfafb64306b4951f21e764b60->enter($__internal_a1aa549389ccdcfa8758912975643b7519d1895bfafb64306b4951f21e764b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche imprimé technique ";
        
        $__internal_a1aa549389ccdcfa8758912975643b7519d1895bfafb64306b4951f21e764b60->leave($__internal_a1aa549389ccdcfa8758912975643b7519d1895bfafb64306b4951f21e764b60_prof);

        
        $__internal_133c8c6c242aa4222a9ae370c255cfd19b353a7ebf4142537188828f0226b126->leave($__internal_133c8c6c242aa4222a9ae370c255cfd19b353a7ebf4142537188828f0226b126_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b3676636e31cff988799f6e5f960cd34e536ab985a0516aa038a979a9d9776b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3676636e31cff988799f6e5f960cd34e536ab985a0516aa038a979a9d9776b4->enter($__internal_b3676636e31cff988799f6e5f960cd34e536ab985a0516aa038a979a9d9776b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_afe62cdd6ceb80abb2db27791a3417a2a008e4ac51aea1914471469dc7d79010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe62cdd6ceb80abb2db27791a3417a2a008e4ac51aea1914471469dc7d79010->enter($__internal_afe62cdd6ceb80abb2db27791a3417a2a008e4ac51aea1914471469dc7d79010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_afe62cdd6ceb80abb2db27791a3417a2a008e4ac51aea1914471469dc7d79010->leave($__internal_afe62cdd6ceb80abb2db27791a3417a2a008e4ac51aea1914471469dc7d79010_prof);

        
        $__internal_b3676636e31cff988799f6e5f960cd34e536ab985a0516aa038a979a9d9776b4->leave($__internal_b3676636e31cff988799f6e5f960cd34e536ab985a0516aa038a979a9d9776b4_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b9bd4ea2764b003ecf42199ecedf481553c03dc182c7f032ba4b27129cd6054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b9bd4ea2764b003ecf42199ecedf481553c03dc182c7f032ba4b27129cd6054->enter($__internal_0b9bd4ea2764b003ecf42199ecedf481553c03dc182c7f032ba4b27129cd6054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a87cd9b28841d3f0033639f3ae4939bde94a976f3158a59ef607ea15e9e6531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a87cd9b28841d3f0033639f3ae4939bde94a976f3158a59ef607ea15e9e6531->enter($__internal_3a87cd9b28841d3f0033639f3ae4939bde94a976f3158a59ef607ea15e9e6531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
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
        if ((($context["ct_imprime_tech_id"] ?? $this->getContext($context, "ct_imprime_tech_id")) && ($context["nomImprimeTech"] ?? $this->getContext($context, "nomImprimeTech")))) {
            // line 43
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, ($context["ct_imprime_tech_id"] ?? $this->getContext($context, "ct_imprime_tech_id")), "html", null, true);
            echo "\" selected>
                                                    ";
            // line 44
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["nomImprimeTech"] ?? $this->getContext($context, "nomImprimeTech"))), "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        // line 47
        echo "
                                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_its"] ?? $this->getContext($context, "list_its")));
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
        echo twig_escape_filter($this->env, ($context["itu_numero"] ?? $this->getContext($context, "itu_numero")), "html", null, true);
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
        if (($context["imprime"] ?? $this->getContext($context, "imprime"))) {
            // line 75
            echo "                            <div class=\"col-md-2\">
                                <div class=\"box-body\">
                                    <div class=\"form-group\">
                                        <a class=\"btn btn-warning\" title=\"Modifier\"
                                           href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_edit", array("id" => $this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                            Modifier
                                        </a>
                                    </div>
                                </div>
                            </div>
                            ";
            // line 86
            if ($this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ituUsed", array())) {
                // line 87
                echo "                            <div class=\"col-md-2\">
                                <div class=\"box-body\">
                                    <div class=\"form-group\">
                                        <a class=\"btn btn-default\" title=\"Annuler utilisation\"
                                        href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_reset", array("id" => $this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "id", array()))), "html", null, true);
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
                        ";
        // line 101
        if (($context["imprime"] ?? $this->getContext($context, "imprime"))) {
            // line 102
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
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ctBordereau", array()), "blNumero", array()), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>N° de l'imprimé technique</label>
                                                    <input value=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ituNumero", array()), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>Centre destinataire</label>
                                                    <input value=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ctCentre", array()), "ctrNom", array()), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-check\" style=\"margin:15px 0 0; padding: 15px 0 0 0\">
                                                    <input class=\"form-check-input\" type=\"checkbox\" style=\"margin:0 0 0 4px; padding: 0 0 0 4px;\" ";
            // line 133
            if ($this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ituUsed", array())) {
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
            // line 144
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ctImprimeTech", array()), "nomImprimeTech", array())), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>Motif d'utilisation IT</label>
                                                    <input value=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ituMotifUsed", array()), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>N° contröle / N° d'enregistrement</label>
                                                    <input value=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ctControle", array()), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\" style=\"margin: 12px 0 0 0; padding: 12px 0 0 0;\">
                                                    <a class=\"btn btn-warning\" title=\"Modifier\"
                                                    href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_edit", array("id" => $this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "id", array()))), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-edit\"></i>
                                                        Modifier
                                                    </a>
                                                    ";
            // line 168
            if ($this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ituUsed", array())) {
                // line 169
                echo "                                                    <a class=\"btn btn-default\" title=\"Annuler utilisation\"
                                                    href=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_reset", array("id" => $this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "id", array()))), "html", null, true);
                echo "\">
                                                        <i class=\"fa fa-trash\"></i>
                                                        Annuler utilisation
                                                    </a>
                                                    ";
            }
            // line 175
            echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 183
        echo "                    </div>
                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_3a87cd9b28841d3f0033639f3ae4939bde94a976f3158a59ef607ea15e9e6531->leave($__internal_3a87cd9b28841d3f0033639f3ae4939bde94a976f3158a59ef607ea15e9e6531_prof);

        
        $__internal_0b9bd4ea2764b003ecf42199ecedf481553c03dc182c7f032ba4b27129cd6054->leave($__internal_0b9bd4ea2764b003ecf42199ecedf481553c03dc182c7f032ba4b27129cd6054_prof);

    }

    // line 190
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fdffabe6dd96f8d902f75049a97cd102d10aadf803be54538972098f7e084a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdffabe6dd96f8d902f75049a97cd102d10aadf803be54538972098f7e084a0e->enter($__internal_fdffabe6dd96f8d902f75049a97cd102d10aadf803be54538972098f7e084a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_906d1f72ace47c28f1f40fbc29f924d2145f4146fe91c3e29eb2b34e7aa2904a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906d1f72ace47c28f1f40fbc29f924d2145f4146fe91c3e29eb2b34e7aa2904a->enter($__internal_906d1f72ace47c28f1f40fbc29f924d2145f4146fe91c3e29eb2b34e7aa2904a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 191
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        var _recuperer_numero_it_ajax_uri = \"";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_search");
        echo "\";
    </script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/search.used_it.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_906d1f72ace47c28f1f40fbc29f924d2145f4146fe91c3e29eb2b34e7aa2904a->leave($__internal_906d1f72ace47c28f1f40fbc29f924d2145f4146fe91c3e29eb2b34e7aa2904a_prof);

        
        $__internal_fdffabe6dd96f8d902f75049a97cd102d10aadf803be54538972098f7e084a0e->leave($__internal_fdffabe6dd96f8d902f75049a97cd102d10aadf803be54538972098f7e084a0e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtImprimeTechUse:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 199,  418 => 197,  413 => 195,  405 => 191,  396 => 190,  381 => 183,  371 => 175,  363 => 170,  360 => 169,  358 => 168,  351 => 164,  342 => 158,  331 => 150,  322 => 144,  306 => 133,  298 => 128,  287 => 120,  278 => 114,  264 => 102,  262 => 101,  259 => 100,  256 => 99,  245 => 91,  239 => 87,  237 => 86,  227 => 79,  221 => 75,  219 => 74,  201 => 59,  193 => 53,  184 => 50,  179 => 49,  175 => 48,  172 => 47,  166 => 44,  161 => 43,  159 => 42,  140 => 27,  138 => 26,  129 => 23,  126 => 22,  121 => 21,  112 => 18,  109 => 17,  104 => 16,  95 => 15,  83 => 9,  76 => 6,  67 => 5,  48 => 3,  38 => 1,  36 => 13,  34 => 12,  11 => 1,);
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

{% block title %}{{ parent() }} Recherche imprimé technique {% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <!-- JQuery UI -->
    <link href=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.css') }}\" rel=\"Stylesheet\"></link>
{% endblock %}

{% set menu_imprime_tech_use        = true %}
{% set menu_imprime_tech_use_search = true %}

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
    <form action=\"{{ path('imprime_tech_use_search') }}\" method=\"POST\">
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
                                            {% if (ct_imprime_tech_id and nomImprimeTech) %}
                                                <option value=\"{{ ct_imprime_tech_id }}\" selected>
                                                    {{ nomImprimeTech | upper }}
                                                </option>
                                            {% endif %}

                                            {% for list_it in list_its %}
                                                <option value=\"{{ list_it.id }}\">
                                                    {{ list_it.nomImprimeTech | upper }}
                                                </option>
                                            {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"itu_numero\">Par numéro d'imprimé technique</label>
                                    <input id=\"itu_numero\" name=\"itu_numero\" value=\"{{ itu_numero }}\"
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
                            {% if imprime %}
                            <div class=\"col-md-2\">
                                <div class=\"box-body\">
                                    <div class=\"form-group\">
                                        <a class=\"btn btn-warning\" title=\"Modifier\"
                                           href=\"{{ path('imprime_tech_use_edit', {'id':imprime.id}) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                            Modifier
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {% if imprime.ituUsed %}
                            <div class=\"col-md-2\">
                                <div class=\"box-body\">
                                    <div class=\"form-group\">
                                        <a class=\"btn btn-default\" title=\"Annuler utilisation\"
                                        href=\"{{ path('imprime_tech_use_reset', {'id':imprime.id}) }}\">
                                            <i class=\"fa fa-trash\"></i>
                                            Annuler utilisation
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {% endif %}
                            {% endif %}
                        </div>
                        {% if imprime %}
                        <div class=\"row\">
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
                                                    <input value=\"{{ imprime.ctBordereau.blNumero }}\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>N° de l'imprimé technique</label>
                                                    <input value=\"{{ imprime.ituNumero }}\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>Centre destinataire</label>
                                                    <input value=\"{{ imprime.ctCentre.ctrNom }}\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-check\" style=\"margin:15px 0 0; padding: 15px 0 0 0\">
                                                    <input class=\"form-check-input\" type=\"checkbox\" style=\"margin:0 0 0 4px; padding: 0 0 0 4px;\" {% if imprime.ituUsed %} checked {% endif %} disabled>
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
                                                    <input value=\"{{ imprime.ctImprimeTech.nomImprimeTech|upper }}\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>Motif d'utilisation IT</label>
                                                    <input value=\"{{ imprime.ituMotifUsed }}\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>N° contröle / N° d'enregistrement</label>
                                                    <input value=\"{{ imprime.ctControle }}\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\" style=\"margin: 12px 0 0 0; padding: 12px 0 0 0;\">
                                                    <a class=\"btn btn-warning\" title=\"Modifier\"
                                                    href=\"{{ path('imprime_tech_use_edit', {'id':imprime.id}) }}\">
                                                        <i class=\"fa fa-edit\"></i>
                                                        Modifier
                                                    </a>
                                                    {% if imprime.ituUsed %}
                                                    <a class=\"btn btn-default\" title=\"Annuler utilisation\"
                                                    href=\"{{ path('imprime_tech_use_reset', {'id':imprime.id}) }}\">
                                                        <i class=\"fa fa-trash\"></i>
                                                        Annuler utilisation
                                                    </a>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>
    <script>
        var _recuperer_numero_it_ajax_uri = \"{{ path('imprime_tech_use_search') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/search.used_it.js') }}\"></script>
{% endblock %}", "AdminBundle:CtImprimeTechUse:search.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtImprimeTechUse/search.html.twig");
    }
}
