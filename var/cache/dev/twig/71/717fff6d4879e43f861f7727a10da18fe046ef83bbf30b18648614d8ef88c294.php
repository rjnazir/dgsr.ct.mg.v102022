<?php

/* @Admin/CtMotif/index.html.twig */
class __TwigTemplate_270bb5009ef6d9ecd32c4149cbc0b69e911539ea69130e3a7fa24c021de35231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMotif/index.html.twig", 1);
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
        $__internal_680769a5bb981f38973c99e58b7a4bb50162fe58d195947cb8b88605c19daadf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_680769a5bb981f38973c99e58b7a4bb50162fe58d195947cb8b88605c19daadf->enter($__internal_680769a5bb981f38973c99e58b7a4bb50162fe58d195947cb8b88605c19daadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotif/index.html.twig"));

        $__internal_51084de076261a2c6170e042b005c8ea8de7a32bad1a02e0f16e12d91bc91357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51084de076261a2c6170e042b005c8ea8de7a32bad1a02e0f16e12d91bc91357->enter($__internal_51084de076261a2c6170e042b005c8ea8de7a32bad1a02e0f16e12d91bc91357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotif/index.html.twig"));

        // line 5
        $context["menu_motif"] = true;
        // line 6
        $context["menu_motif_type"] = true;
        // line 7
        $context["menu_motif_type_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_680769a5bb981f38973c99e58b7a4bb50162fe58d195947cb8b88605c19daadf->leave($__internal_680769a5bb981f38973c99e58b7a4bb50162fe58d195947cb8b88605c19daadf_prof);

        
        $__internal_51084de076261a2c6170e042b005c8ea8de7a32bad1a02e0f16e12d91bc91357->leave($__internal_51084de076261a2c6170e042b005c8ea8de7a32bad1a02e0f16e12d91bc91357_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c57e2c20f97ddbb1f35fe60a346e6476d44de42bc3b51b95e14b686008c05112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c57e2c20f97ddbb1f35fe60a346e6476d44de42bc3b51b95e14b686008c05112->enter($__internal_c57e2c20f97ddbb1f35fe60a346e6476d44de42bc3b51b95e14b686008c05112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f2e341e20ba58764cc8916b0412600253bc5e0542a03f24cf3c9082b13a4681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2e341e20ba58764cc8916b0412600253bc5e0542a03f24cf3c9082b13a4681->enter($__internal_2f2e341e20ba58764cc8916b0412600253bc5e0542a03f24cf3c9082b13a4681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des motifs ";
        
        $__internal_2f2e341e20ba58764cc8916b0412600253bc5e0542a03f24cf3c9082b13a4681->leave($__internal_2f2e341e20ba58764cc8916b0412600253bc5e0542a03f24cf3c9082b13a4681_prof);

        
        $__internal_c57e2c20f97ddbb1f35fe60a346e6476d44de42bc3b51b95e14b686008c05112->leave($__internal_c57e2c20f97ddbb1f35fe60a346e6476d44de42bc3b51b95e14b686008c05112_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_28da99d3744d032e8715e1a6ce991e512e9ad3590f5b1c2049012933ec068f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28da99d3744d032e8715e1a6ce991e512e9ad3590f5b1c2049012933ec068f3e->enter($__internal_28da99d3744d032e8715e1a6ce991e512e9ad3590f5b1c2049012933ec068f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3cc08b7ef3c04f3bca001003377b946dba5be6f1c7d3e0d9d4767b23fbd1fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3cc08b7ef3c04f3bca001003377b946dba5be6f1c7d3e0d9d4767b23fbd1fcc->enter($__internal_d3cc08b7ef3c04f3bca001003377b946dba5be6f1c7d3e0d9d4767b23fbd1fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 22
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
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
        // line 37
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un motif
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-motif\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                     <th>Calculable</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["motifs"] ?? $this->getContext($context, "motifs")));
        foreach ($context['_seq'] as $context["_key"] => $context["motif"]) {
            // line 59
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "mtfLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 64
            echo (($this->getAttribute($context["motif"], "mtfIsCalculable", array())) ? ("Oui") : ("Non"));
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_edit", array("id" => $this->getAttribute($context["motif"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_delete", array("id" => $this->getAttribute($context["motif"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                            </tbody>
                        </table>

                        ";
        // line 81
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
        
        $__internal_d3cc08b7ef3c04f3bca001003377b946dba5be6f1c7d3e0d9d4767b23fbd1fcc->leave($__internal_d3cc08b7ef3c04f3bca001003377b946dba5be6f1c7d3e0d9d4767b23fbd1fcc_prof);

        
        $__internal_28da99d3744d032e8715e1a6ce991e512e9ad3590f5b1c2049012933ec068f3e->leave($__internal_28da99d3744d032e8715e1a6ce991e512e9ad3590f5b1c2049012933ec068f3e_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b102a92681d051d3f389c824cb388046b258bdaf231d0bab7bb07efa6581bdbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b102a92681d051d3f389c824cb388046b258bdaf231d0bab7bb07efa6581bdbc->enter($__internal_b102a92681d051d3f389c824cb388046b258bdaf231d0bab7bb07efa6581bdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c052cb030ee4a1e74e5ae4e6d297073296bdcacc332c9aaff9b3a58ce7bed887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c052cb030ee4a1e74e5ae4e6d297073296bdcacc332c9aaff9b3a58ce7bed887->enter($__internal_c052cb030ee4a1e74e5ae4e6d297073296bdcacc332c9aaff9b3a58ce7bed887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-motif').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune motif trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_c052cb030ee4a1e74e5ae4e6d297073296bdcacc332c9aaff9b3a58ce7bed887->leave($__internal_c052cb030ee4a1e74e5ae4e6d297073296bdcacc332c9aaff9b3a58ce7bed887_prof);

        
        $__internal_b102a92681d051d3f389c824cb388046b258bdaf231d0bab7bb07efa6581bdbc->leave($__internal_b102a92681d051d3f389c824cb388046b258bdaf231d0bab7bb07efa6581bdbc_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMotif/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 95,  241 => 94,  220 => 81,  215 => 77,  203 => 71,  196 => 67,  190 => 64,  186 => 63,  181 => 61,  177 => 59,  173 => 58,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des motifs {% endblock %}

{% set menu_motif           = true %}
{% set menu_motif_type      = true %}
{% set menu_motif_type_list = true %}

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
                    <a href=\"{{ path('motif_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un motif
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('motif_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-motif\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                     <th>Calculable</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for motif in motifs %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ motif.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ motif.mtfLibelle }}</td>
                                        <td>{{ motif.mtfIsCalculable? \"Oui\" : \"Non\" }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('motif_edit', { 'id': motif.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('motif_delete', { 'id': motif.id }) }}\">
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
            \$('#list-motif').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune motif trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@Admin/CtMotif/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMotif\\index.html.twig");
    }
}
