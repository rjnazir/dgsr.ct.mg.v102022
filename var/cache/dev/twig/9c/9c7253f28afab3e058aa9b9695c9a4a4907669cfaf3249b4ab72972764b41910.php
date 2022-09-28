<?php

/* AdminBundle:CtStatistiqueVisite:index.html.twig */
class __TwigTemplate_6870a99a13e85b8290ad1f4ef974c19d66a0939205cb0a234a3e98c3e707f5ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtStatistiqueVisite:index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4959bf60eb818cad932b1c5bf59e6161f6c9997c4652f3fb9abb8afd8713602b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4959bf60eb818cad932b1c5bf59e6161f6c9997c4652f3fb9abb8afd8713602b->enter($__internal_4959bf60eb818cad932b1c5bf59e6161f6c9997c4652f3fb9abb8afd8713602b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtStatistiqueVisite:index.html.twig"));

        $__internal_07f884c20bbd50206d60aa706e4a899b53fb41583bb91db2e03e03170eb136ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f884c20bbd50206d60aa706e4a899b53fb41583bb91db2e03e03170eb136ea->enter($__internal_07f884c20bbd50206d60aa706e4a899b53fb41583bb91db2e03e03170eb136ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtStatistiqueVisite:index.html.twig"));

        // line 5
        $context["menu_statistique_visite"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4959bf60eb818cad932b1c5bf59e6161f6c9997c4652f3fb9abb8afd8713602b->leave($__internal_4959bf60eb818cad932b1c5bf59e6161f6c9997c4652f3fb9abb8afd8713602b_prof);

        
        $__internal_07f884c20bbd50206d60aa706e4a899b53fb41583bb91db2e03e03170eb136ea->leave($__internal_07f884c20bbd50206d60aa706e4a899b53fb41583bb91db2e03e03170eb136ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e89e3ef1a669c8ba461543e393648a48ac07c0fbcd5c32cab60fb6e5f7622f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e89e3ef1a669c8ba461543e393648a48ac07c0fbcd5c32cab60fb6e5f7622f08->enter($__internal_e89e3ef1a669c8ba461543e393648a48ac07c0fbcd5c32cab60fb6e5f7622f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_660125b16d030a0ca8ecee089332d06879a9eb424e72f6e7df91d7e22a504bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660125b16d030a0ca8ecee089332d06879a9eb424e72f6e7df91d7e22a504bb0->enter($__internal_660125b16d030a0ca8ecee089332d06879a9eb424e72f6e7df91d7e22a504bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Statistique des visites ";
        
        $__internal_660125b16d030a0ca8ecee089332d06879a9eb424e72f6e7df91d7e22a504bb0->leave($__internal_660125b16d030a0ca8ecee089332d06879a9eb424e72f6e7df91d7e22a504bb0_prof);

        
        $__internal_e89e3ef1a669c8ba461543e393648a48ac07c0fbcd5c32cab60fb6e5f7622f08->leave($__internal_e89e3ef1a669c8ba461543e393648a48ac07c0fbcd5c32cab60fb6e5f7622f08_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2d6088084cf382fd9721ed116147d909bba800624e2075f02a8a0acb11bcb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d6088084cf382fd9721ed116147d909bba800624e2075f02a8a0acb11bcb39->enter($__internal_e2d6088084cf382fd9721ed116147d909bba800624e2075f02a8a0acb11bcb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e779dab4dafb922a3499c4c5367ad05057892e9ecd67935f3f0bbbcb09b4efaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e779dab4dafb922a3499c4c5367ad05057892e9ecd67935f3f0bbbcb09b4efaa->enter($__internal_e779dab4dafb922a3499c4c5367ad05057892e9ecd67935f3f0bbbcb09b4efaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "        <div class=\"callout callout-success\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 20
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    <!-- Modal séléction centre et année -->
    <div id=\"modal-generate\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Génération statististique visite <span id=\"title-type\"></span></h4>
                </div>

                <form>
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"type-bilan\" id=\"type-bilan\" />

                        <!-- Centre -->
                        <div class=\"";
        // line 39
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label for=\"ct-centre\">Séléctionner le centre</label>
                                        <select required id=\"ct-centre\" name=\"ct-centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Alarobia\">
                                            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? $this->getContext($context, "provinces")));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 47
            echo "                                                <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? $this->getContext($context, "centres")));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 49
                echo "                                                        ";
                if (($this->getAttribute($context["province"], "id", array()) == $this->getAttribute($this->getAttribute($context["centre"], "ctProvince", array()), "id", array()))) {
                    // line 50
                    echo "                                                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
                    echo "\">
                                                                ";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array()), "html", null, true);
                    echo "
                                                            </option>
                                                        ";
                }
                // line 54
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                                                </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Année -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-annee\">Séléctionner l'année</label>
                                    <input required id=\"ct-annee\" name=\"ct-annee\" class=\"form-control yearpicker\"
                                           placeholder=\"2017\" />
                                </div>
                            </div>
                        </div>

                        <!-- Trimestre  -->
                        <div class=\"row kl-trimestriel hide\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-trimestre\">Séléctionner trimestre</label>
                                    <select id=\"id-trimestre\" name=\"ct-trimestre\" class=\"form-control select2\" style=\"width: 100%;\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Semestre  -->
                        <div class=\"row kl-semestriel hide\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-semestre\">Séléctionner Semestre</label>
                                    <select id=\"id-semestre\" name=\"ct-semestre\" class=\"form-control select2\" style=\"width: 100%;\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Mois  -->
                        <div class=\"row kl-mensuel hide\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-mois\">Séléctionner Mois</label>
                                    <select id=\"id-mois\" name=\"ct-mois\" class=\"form-control select2\" style=\"width: 100%;\">
                                        <option value=\"1\">Janvier</option>
                                        <option value=\"2\">Février</option>
                                        <option value=\"3\">Mars</option>
                                        <option value=\"4\">Avril</option>
                                        <option value=\"5\">Mai</option>
                                        <option value=\"6\">Juin</option>
                                        <option value=\"7\">Juillet</option>
                                        <option value=\"8\">Août</option>
                                        <option value=\"9\">Septembre</option>
                                        <option value=\"10\">Octobre</option>
                                        <option value=\"11\">Novembre</option>
                                        <option value=\"12\">Décembre</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"modal-footer\">
                        <div class=\"col-md-4\">
                            <button type=\"submit\" class=\"pull-right btn btn-primary\" id=\"btn-generate\">
                                Valider
                            </button>
                        </div>
                        <div class=\"col-md-offset-2 col-md-6\">
                            <span class=\"pull-left\" id=\"link-download\"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"row\">
        ";
        // line 143
        echo "        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Annuel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('annuel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_visite\"/>
                </div>
            </div>
        </div>

        ";
        // line 162
        echo "        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Semestriel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('semestriel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_visite\"/>
                </div>
            </div>
        </div>

        ";
        // line 181
        echo "        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Trimestriel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('trimestriel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_visite\"/>
                </div>
            </div>
        </div>

        ";
        // line 200
        echo "        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Mensuel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('mensuel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_visite\"/>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e779dab4dafb922a3499c4c5367ad05057892e9ecd67935f3f0bbbcb09b4efaa->leave($__internal_e779dab4dafb922a3499c4c5367ad05057892e9ecd67935f3f0bbbcb09b4efaa_prof);

        
        $__internal_e2d6088084cf382fd9721ed116147d909bba800624e2075f02a8a0acb11bcb39->leave($__internal_e2d6088084cf382fd9721ed116147d909bba800624e2075f02a8a0acb11bcb39_prof);

    }

    // line 220
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_880f4fff7f593442c4fa84aa4a388e0212e280656808de01d6367d819f772a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880f4fff7f593442c4fa84aa4a388e0212e280656808de01d6367d819f772a58->enter($__internal_880f4fff7f593442c4fa84aa4a388e0212e280656808de01d6367d819f772a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a853c1a7c05bae601cbc3a95147a6afee4ae66a0ab5e394270c1242bee13c645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a853c1a7c05bae601cbc3a95147a6afee4ae66a0ab5e394270c1242bee13c645->enter($__internal_a853c1a7c05bae601cbc3a95147a6afee4ae66a0ab5e394270c1242bee13c645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 221
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        var _generate_reporting_ajax_uri = \"";
        // line 224
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistique_visite_generate_reporting_annuel_ajax");
        echo "\";
    </script>
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/statistique.visite.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a853c1a7c05bae601cbc3a95147a6afee4ae66a0ab5e394270c1242bee13c645->leave($__internal_a853c1a7c05bae601cbc3a95147a6afee4ae66a0ab5e394270c1242bee13c645_prof);

        
        $__internal_880f4fff7f593442c4fa84aa4a388e0212e280656808de01d6367d819f772a58->leave($__internal_880f4fff7f593442c4fa84aa4a388e0212e280656808de01d6367d819f772a58_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtStatistiqueVisite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 226,  388 => 224,  381 => 221,  372 => 220,  344 => 200,  324 => 181,  304 => 162,  284 => 143,  197 => 57,  190 => 55,  184 => 54,  178 => 51,  173 => 50,  170 => 49,  166 => 48,  161 => 47,  157 => 46,  145 => 39,  128 => 24,  119 => 21,  114 => 20,  110 => 19,  107 => 18,  98 => 15,  95 => 14,  90 => 13,  81 => 10,  78 => 9,  73 => 8,  64 => 7,  45 => 3,  35 => 1,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Statistique des visites {% endblock %}

{% set menu_statistique_visite = true %}

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
    
    {% for key, messages in app.session.flashbag.all() %}
        <div class=\"callout callout-{{ key }}\">
            {{ messages }} <br />
        </div>
    {% endfor %}

    <!-- Modal séléction centre et année -->
    <div id=\"modal-generate\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Génération statististique visite <span id=\"title-type\"></span></h4>
                </div>

                <form>
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"type-bilan\" id=\"type-bilan\" />

                        <!-- Centre -->
                        <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label for=\"ct-centre\">Séléctionner le centre</label>
                                        <select required id=\"ct-centre\" name=\"ct-centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Alarobia\">
                                            {% for province in provinces %}
                                                <optgroup label=\"{{ province.prvNom }}\">
                                                    {% for centre in centres %}
                                                        {% if province.id == centre.ctProvince.id %}
                                                            <option value=\"{{ centre.id }}\">
                                                                {{ centre.ctrNom }}
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

                        <!-- Année -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-annee\">Séléctionner l'année</label>
                                    <input required id=\"ct-annee\" name=\"ct-annee\" class=\"form-control yearpicker\"
                                           placeholder=\"2017\" />
                                </div>
                            </div>
                        </div>

                        <!-- Trimestre  -->
                        <div class=\"row kl-trimestriel hide\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-trimestre\">Séléctionner trimestre</label>
                                    <select id=\"id-trimestre\" name=\"ct-trimestre\" class=\"form-control select2\" style=\"width: 100%;\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Semestre  -->
                        <div class=\"row kl-semestriel hide\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-semestre\">Séléctionner Semestre</label>
                                    <select id=\"id-semestre\" name=\"ct-semestre\" class=\"form-control select2\" style=\"width: 100%;\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Mois  -->
                        <div class=\"row kl-mensuel hide\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-mois\">Séléctionner Mois</label>
                                    <select id=\"id-mois\" name=\"ct-mois\" class=\"form-control select2\" style=\"width: 100%;\">
                                        <option value=\"1\">Janvier</option>
                                        <option value=\"2\">Février</option>
                                        <option value=\"3\">Mars</option>
                                        <option value=\"4\">Avril</option>
                                        <option value=\"5\">Mai</option>
                                        <option value=\"6\">Juin</option>
                                        <option value=\"7\">Juillet</option>
                                        <option value=\"8\">Août</option>
                                        <option value=\"9\">Septembre</option>
                                        <option value=\"10\">Octobre</option>
                                        <option value=\"11\">Novembre</option>
                                        <option value=\"12\">Décembre</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"modal-footer\">
                        <div class=\"col-md-4\">
                            <button type=\"submit\" class=\"pull-right btn btn-primary\" id=\"btn-generate\">
                                Valider
                            </button>
                        </div>
                        <div class=\"col-md-offset-2 col-md-6\">
                            <span class=\"pull-left\" id=\"link-download\"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"row\">
        {# Annuel #}
        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Annuel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('annuel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_visite\"/>
                </div>
            </div>
        </div>

        {# Semestriel #}
        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Semestriel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('semestriel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_visite\"/>
                </div>
            </div>
        </div>

        {# Trimestriel #}
        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Trimestriel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('trimestriel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_visite\"/>
                </div>
            </div>
        </div>

        {# Mensuel #}
        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Mensuel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('mensuel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_visite\"/>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        var _generate_reporting_ajax_uri = \"{{ path('statistique_visite_generate_reporting_annuel_ajax') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/statistique.visite.js') }}\"></script>
{% endblock %}
", "AdminBundle:CtStatistiqueVisite:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtStatistiqueVisite/index.html.twig");
    }
}
