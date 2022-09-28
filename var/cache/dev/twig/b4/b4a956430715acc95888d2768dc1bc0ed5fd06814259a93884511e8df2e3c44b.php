<?php

/* @Admin/CtImprimeTechUse/search.html.twig */
class __TwigTemplate_8950e7186f469ec8ae18d07de38558500228032f63e9e852e6866964fe1c383c extends Twig_Template
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
        $__internal_1c6a4a7c0984526907ce472a5e0d35ac701d3dc11ab15935a264db9279d3b83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c6a4a7c0984526907ce472a5e0d35ac701d3dc11ab15935a264db9279d3b83a->enter($__internal_1c6a4a7c0984526907ce472a5e0d35ac701d3dc11ab15935a264db9279d3b83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTechUse/search.html.twig"));

        $__internal_b2cbd3fa7c813648ca38b903c06c5df8aa6c06c07ad2810daec9ab305aec3628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2cbd3fa7c813648ca38b903c06c5df8aa6c06c07ad2810daec9ab305aec3628->enter($__internal_b2cbd3fa7c813648ca38b903c06c5df8aa6c06c07ad2810daec9ab305aec3628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTechUse/search.html.twig"));

        // line 12
        $context["menu_imprime_tech_use"] = true;
        // line 13
        $context["menu_imprime_tech_use_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c6a4a7c0984526907ce472a5e0d35ac701d3dc11ab15935a264db9279d3b83a->leave($__internal_1c6a4a7c0984526907ce472a5e0d35ac701d3dc11ab15935a264db9279d3b83a_prof);

        
        $__internal_b2cbd3fa7c813648ca38b903c06c5df8aa6c06c07ad2810daec9ab305aec3628->leave($__internal_b2cbd3fa7c813648ca38b903c06c5df8aa6c06c07ad2810daec9ab305aec3628_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5a2b023cadd837d20c5ddfaf7c078cb607735e4dbb98332cde1f77f773726cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a2b023cadd837d20c5ddfaf7c078cb607735e4dbb98332cde1f77f773726cf->enter($__internal_e5a2b023cadd837d20c5ddfaf7c078cb607735e4dbb98332cde1f77f773726cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e58d0f9e18f40ab39137f435493dcc886e286f3d68c8bbfa94fd63abf2a0b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e58d0f9e18f40ab39137f435493dcc886e286f3d68c8bbfa94fd63abf2a0b95->enter($__internal_9e58d0f9e18f40ab39137f435493dcc886e286f3d68c8bbfa94fd63abf2a0b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche imprimé technique ";
        
        $__internal_9e58d0f9e18f40ab39137f435493dcc886e286f3d68c8bbfa94fd63abf2a0b95->leave($__internal_9e58d0f9e18f40ab39137f435493dcc886e286f3d68c8bbfa94fd63abf2a0b95_prof);

        
        $__internal_e5a2b023cadd837d20c5ddfaf7c078cb607735e4dbb98332cde1f77f773726cf->leave($__internal_e5a2b023cadd837d20c5ddfaf7c078cb607735e4dbb98332cde1f77f773726cf_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ff7c883a6c48b437ac4ed513cbf204b2806c232171ded664126ba87ad31f369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff7c883a6c48b437ac4ed513cbf204b2806c232171ded664126ba87ad31f369->enter($__internal_5ff7c883a6c48b437ac4ed513cbf204b2806c232171ded664126ba87ad31f369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_01f156f4e33f7473035db421fdb00875fe27c8d5e75e9e970ca5d00e327be6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f156f4e33f7473035db421fdb00875fe27c8d5e75e9e970ca5d00e327be6d2->enter($__internal_01f156f4e33f7473035db421fdb00875fe27c8d5e75e9e970ca5d00e327be6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_01f156f4e33f7473035db421fdb00875fe27c8d5e75e9e970ca5d00e327be6d2->leave($__internal_01f156f4e33f7473035db421fdb00875fe27c8d5e75e9e970ca5d00e327be6d2_prof);

        
        $__internal_5ff7c883a6c48b437ac4ed513cbf204b2806c232171ded664126ba87ad31f369->leave($__internal_5ff7c883a6c48b437ac4ed513cbf204b2806c232171ded664126ba87ad31f369_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_41693bd0f0a018d35ce4ac45fe86fe6784af10ee3b56905fdf602dc07e84376c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41693bd0f0a018d35ce4ac45fe86fe6784af10ee3b56905fdf602dc07e84376c->enter($__internal_41693bd0f0a018d35ce4ac45fe86fe6784af10ee3b56905fdf602dc07e84376c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_891c0e08e1fd5512d34d85a99f354018daf480ae47d1857f4257c5cc14b80020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891c0e08e1fd5512d34d85a99f354018daf480ae47d1857f4257c5cc14b80020->enter($__internal_891c0e08e1fd5512d34d85a99f354018daf480ae47d1857f4257c5cc14b80020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_891c0e08e1fd5512d34d85a99f354018daf480ae47d1857f4257c5cc14b80020->leave($__internal_891c0e08e1fd5512d34d85a99f354018daf480ae47d1857f4257c5cc14b80020_prof);

        
        $__internal_41693bd0f0a018d35ce4ac45fe86fe6784af10ee3b56905fdf602dc07e84376c->leave($__internal_41693bd0f0a018d35ce4ac45fe86fe6784af10ee3b56905fdf602dc07e84376c_prof);

    }

    // line 190
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b3e844d671fffe5e9d81ebd3bcdea988a4920fe9525ad25649a77bd8f5043ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e844d671fffe5e9d81ebd3bcdea988a4920fe9525ad25649a77bd8f5043ff9->enter($__internal_b3e844d671fffe5e9d81ebd3bcdea988a4920fe9525ad25649a77bd8f5043ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_96a0826bafc3b117cefd3fe2933829779e22d9b82ecdb62a24d1767afc6cee66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a0826bafc3b117cefd3fe2933829779e22d9b82ecdb62a24d1767afc6cee66->enter($__internal_96a0826bafc3b117cefd3fe2933829779e22d9b82ecdb62a24d1767afc6cee66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_96a0826bafc3b117cefd3fe2933829779e22d9b82ecdb62a24d1767afc6cee66->leave($__internal_96a0826bafc3b117cefd3fe2933829779e22d9b82ecdb62a24d1767afc6cee66_prof);

        
        $__internal_b3e844d671fffe5e9d81ebd3bcdea988a4920fe9525ad25649a77bd8f5043ff9->leave($__internal_b3e844d671fffe5e9d81ebd3bcdea988a4920fe9525ad25649a77bd8f5043ff9_prof);

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
{% endblock %}", "@Admin/CtImprimeTechUse/search.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTechUse\\search.html.twig");
    }
}
