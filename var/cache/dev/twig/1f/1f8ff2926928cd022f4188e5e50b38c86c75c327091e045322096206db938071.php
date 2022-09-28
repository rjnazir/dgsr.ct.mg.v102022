<?php

/* @Admin/CtMarque/index.html.twig */
class __TwigTemplate_282e55a141a161f4bdea363e83b415cef009247a832344b107e02ae34fa81375 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMarque/index.html.twig", 1);
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
        $__internal_0d86fb687876c992121713e0f18fdadb6526123e17bcd21d4c6d82044679346a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d86fb687876c992121713e0f18fdadb6526123e17bcd21d4c6d82044679346a->enter($__internal_0d86fb687876c992121713e0f18fdadb6526123e17bcd21d4c6d82044679346a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMarque/index.html.twig"));

        $__internal_0fc5d144cd3495500418587af4c1dc07c9103af71874c54aa720296a476c22ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc5d144cd3495500418587af4c1dc07c9103af71874c54aa720296a476c22ef->enter($__internal_0fc5d144cd3495500418587af4c1dc07c9103af71874c54aa720296a476c22ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMarque/index.html.twig"));

        // line 5
        $context["menu_marque"] = true;
        // line 6
        $context["menu_marque_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d86fb687876c992121713e0f18fdadb6526123e17bcd21d4c6d82044679346a->leave($__internal_0d86fb687876c992121713e0f18fdadb6526123e17bcd21d4c6d82044679346a_prof);

        
        $__internal_0fc5d144cd3495500418587af4c1dc07c9103af71874c54aa720296a476c22ef->leave($__internal_0fc5d144cd3495500418587af4c1dc07c9103af71874c54aa720296a476c22ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9892e0533d32fccab1bac42c114d607c019a8c3ad02fc3c58926b4230e5af3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9892e0533d32fccab1bac42c114d607c019a8c3ad02fc3c58926b4230e5af3c1->enter($__internal_9892e0533d32fccab1bac42c114d607c019a8c3ad02fc3c58926b4230e5af3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b67e9a61c8cf301dfac3433e70061f1ee520e139128d07a8f472f3b2e37f3609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67e9a61c8cf301dfac3433e70061f1ee520e139128d07a8f472f3b2e37f3609->enter($__internal_b67e9a61c8cf301dfac3433e70061f1ee520e139128d07a8f472f3b2e37f3609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des marques ";
        
        $__internal_b67e9a61c8cf301dfac3433e70061f1ee520e139128d07a8f472f3b2e37f3609->leave($__internal_b67e9a61c8cf301dfac3433e70061f1ee520e139128d07a8f472f3b2e37f3609_prof);

        
        $__internal_9892e0533d32fccab1bac42c114d607c019a8c3ad02fc3c58926b4230e5af3c1->leave($__internal_9892e0533d32fccab1bac42c114d607c019a8c3ad02fc3c58926b4230e5af3c1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d24bfd400ad43d85d9b8d9c373bcbca04e23bc231ec661ebc65c404e4482698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d24bfd400ad43d85d9b8d9c373bcbca04e23bc231ec661ebc65c404e4482698->enter($__internal_9d24bfd400ad43d85d9b8d9c373bcbca04e23bc231ec661ebc65c404e4482698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf15b9f580548699d3d5d45731089e46b5a9b4fb3b8463e5c5baee23879a8fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf15b9f580548699d3d5d45731089e46b5a9b4fb3b8463e5c5baee23879a8fb9->enter($__internal_cf15b9f580548699d3d5d45731089e46b5a9b4fb3b8463e5c5baee23879a8fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"callout callout-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 21
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 36
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une marque
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-marque\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["marques"] ?? $this->getContext($context, "marques")));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 57
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "mrqLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_edit", array("id" => $this->getAttribute($context["marque"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_delete", array("id" => $this->getAttribute($context["marque"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            </tbody>
                        </table>

                        ";
        // line 78
        echo "                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_cf15b9f580548699d3d5d45731089e46b5a9b4fb3b8463e5c5baee23879a8fb9->leave($__internal_cf15b9f580548699d3d5d45731089e46b5a9b4fb3b8463e5c5baee23879a8fb9_prof);

        
        $__internal_9d24bfd400ad43d85d9b8d9c373bcbca04e23bc231ec661ebc65c404e4482698->leave($__internal_9d24bfd400ad43d85d9b8d9c373bcbca04e23bc231ec661ebc65c404e4482698_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b869cb2686c94315bb9aafe39663ed32b8c11a49756f56d5115a0b479ff784d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b869cb2686c94315bb9aafe39663ed32b8c11a49756f56d5115a0b479ff784d->enter($__internal_4b869cb2686c94315bb9aafe39663ed32b8c11a49756f56d5115a0b479ff784d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3c22fe5c44c735ef599cc9dce86a425370d656f85aba1e41de5b663b528d342b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c22fe5c44c735ef599cc9dce86a425370d656f85aba1e41de5b663b528d342b->enter($__internal_3c22fe5c44c735ef599cc9dce86a425370d656f85aba1e41de5b663b528d342b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-marque').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_3c22fe5c44c735ef599cc9dce86a425370d656f85aba1e41de5b663b528d342b->leave($__internal_3c22fe5c44c735ef599cc9dce86a425370d656f85aba1e41de5b663b528d342b_prof);

        
        $__internal_4b869cb2686c94315bb9aafe39663ed32b8c11a49756f56d5115a0b479ff784d->leave($__internal_4b869cb2686c94315bb9aafe39663ed32b8c11a49756f56d5115a0b479ff784d_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMarque/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 92,  234 => 91,  213 => 78,  208 => 74,  196 => 68,  189 => 64,  183 => 61,  178 => 59,  174 => 57,  170 => 56,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des marques {% endblock %}

{% set menu_marque      = true %}
{% set menu_marque_list = true %}

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

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                {# Bouton création #}
                <div class=\"row add-btn-top-list\">
                    <a href=\"{{ path('marque_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une marque
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('marque_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-marque\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for marque in marques %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ marque.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ marque.mrqLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('marque_edit', { 'id': marque.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('marque_delete', { 'id': marque.id }) }}\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>

                        {# Bouton suppression #}
                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-marque').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "@Admin/CtMarque/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMarque\\index.html.twig");
    }
}
