<?php

/* @Admin/CtUtilisation/index.html.twig */
class __TwigTemplate_69201f2c1245339b7a5d45172fd0fa8520e8183a7999c911eda5dbd6f9d9c169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtUtilisation/index.html.twig", 1);
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
        $__internal_efbfb3c4ca8ae8299e5b7b447f36e42d7a2979e6a288bd53b421ad7bc5a09102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efbfb3c4ca8ae8299e5b7b447f36e42d7a2979e6a288bd53b421ad7bc5a09102->enter($__internal_efbfb3c4ca8ae8299e5b7b447f36e42d7a2979e6a288bd53b421ad7bc5a09102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUtilisation/index.html.twig"));

        $__internal_c754cc920321fbea266404ec4e79c3806899ffb4679a825caac073d1ea0051c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c754cc920321fbea266404ec4e79c3806899ffb4679a825caac073d1ea0051c2->enter($__internal_c754cc920321fbea266404ec4e79c3806899ffb4679a825caac073d1ea0051c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUtilisation/index.html.twig"));

        // line 5
        $context["menu_utilisation"] = true;
        // line 6
        $context["menu_utilisation_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efbfb3c4ca8ae8299e5b7b447f36e42d7a2979e6a288bd53b421ad7bc5a09102->leave($__internal_efbfb3c4ca8ae8299e5b7b447f36e42d7a2979e6a288bd53b421ad7bc5a09102_prof);

        
        $__internal_c754cc920321fbea266404ec4e79c3806899ffb4679a825caac073d1ea0051c2->leave($__internal_c754cc920321fbea266404ec4e79c3806899ffb4679a825caac073d1ea0051c2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d81ae3019759ccf837c60251940859afd789b23628a23a315afb2ede7ac809de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81ae3019759ccf837c60251940859afd789b23628a23a315afb2ede7ac809de->enter($__internal_d81ae3019759ccf837c60251940859afd789b23628a23a315afb2ede7ac809de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c652876cfd18266ed987833403ea3a6c3e00b764e85a9c3ae208365e83711f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c652876cfd18266ed987833403ea3a6c3e00b764e85a9c3ae208365e83711f5->enter($__internal_4c652876cfd18266ed987833403ea3a6c3e00b764e85a9c3ae208365e83711f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des utilisations ";
        
        $__internal_4c652876cfd18266ed987833403ea3a6c3e00b764e85a9c3ae208365e83711f5->leave($__internal_4c652876cfd18266ed987833403ea3a6c3e00b764e85a9c3ae208365e83711f5_prof);

        
        $__internal_d81ae3019759ccf837c60251940859afd789b23628a23a315afb2ede7ac809de->leave($__internal_d81ae3019759ccf837c60251940859afd789b23628a23a315afb2ede7ac809de_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_15776897242a02041c1a2d201d1a6ea3923cb36e7665b2e0e5cc7587a6161362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15776897242a02041c1a2d201d1a6ea3923cb36e7665b2e0e5cc7587a6161362->enter($__internal_15776897242a02041c1a2d201d1a6ea3923cb36e7665b2e0e5cc7587a6161362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6e0488a1f85d0d6bffbc407a9bac37087c267dc81b36a2445c64d90ed1181d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e0488a1f85d0d6bffbc407a9bac37087c267dc81b36a2445c64d90ed1181d3->enter($__internal_a6e0488a1f85d0d6bffbc407a9bac37087c267dc81b36a2445c64d90ed1181d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une utilisation
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-utilisation\" class=\"table table-bordered table-striped table-condensed\">
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
        $context['_seq'] = twig_ensure_traversable(($context["utilisations"] ?? $this->getContext($context, "utilisations")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisation"]) {
            // line 57
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisation"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisation"], "utLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_edit", array("id" => $this->getAttribute($context["utilisation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_delete", array("id" => $this->getAttribute($context["utilisation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisation'], $context['_parent'], $context['loop']);
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
        
        $__internal_a6e0488a1f85d0d6bffbc407a9bac37087c267dc81b36a2445c64d90ed1181d3->leave($__internal_a6e0488a1f85d0d6bffbc407a9bac37087c267dc81b36a2445c64d90ed1181d3_prof);

        
        $__internal_15776897242a02041c1a2d201d1a6ea3923cb36e7665b2e0e5cc7587a6161362->leave($__internal_15776897242a02041c1a2d201d1a6ea3923cb36e7665b2e0e5cc7587a6161362_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec6b9467de33a13c2d10209fe1849d5377d8c90e3229b2fec8c3649f3005d5d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6b9467de33a13c2d10209fe1849d5377d8c90e3229b2fec8c3649f3005d5d8->enter($__internal_ec6b9467de33a13c2d10209fe1849d5377d8c90e3229b2fec8c3649f3005d5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5fe8b1f62a8928dcf5c1a1f2ea399c7670aac09c5ce4985342d9e39862bebc27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe8b1f62a8928dcf5c1a1f2ea399c7670aac09c5ce4985342d9e39862bebc27->enter($__internal_5fe8b1f62a8928dcf5c1a1f2ea399c7670aac09c5ce4985342d9e39862bebc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-utilisation').DataTable(
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
                    \"sEmptyTable\": \"Aucune utilisation trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_5fe8b1f62a8928dcf5c1a1f2ea399c7670aac09c5ce4985342d9e39862bebc27->leave($__internal_5fe8b1f62a8928dcf5c1a1f2ea399c7670aac09c5ce4985342d9e39862bebc27_prof);

        
        $__internal_ec6b9467de33a13c2d10209fe1849d5377d8c90e3229b2fec8c3649f3005d5d8->leave($__internal_ec6b9467de33a13c2d10209fe1849d5377d8c90e3229b2fec8c3649f3005d5d8_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtUtilisation/index.html.twig";
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

{% block title %}{{ parent() }} Liste des utilisations {% endblock %}

{% set menu_utilisation      = true %}
{% set menu_utilisation_list = true %}

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
                    <a href=\"{{ path('utilisation_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une utilisation
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('utilisation_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-utilisation\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for utilisation in utilisations %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ utilisation.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ utilisation.utLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('utilisation_edit', { 'id': utilisation.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('utilisation_delete', { 'id': utilisation.id }) }}\">
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
            \$('#list-utilisation').DataTable(
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
                    \"sEmptyTable\": \"Aucune utilisation trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "@Admin/CtUtilisation/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtUtilisation\\index.html.twig");
    }
}
