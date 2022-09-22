<?php

/* AdminBundle:CtRole:index.html.twig */
class __TwigTemplate_a1985934e21309cbcca7c20faaa038f92421572de19ce92d1d4f9865f95543aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtRole:index.html.twig", 1);
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
        $__internal_87d3137ea01a378b95d858c912e0c797d42d83e6ff3d12abf650a6ed02fe9ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d3137ea01a378b95d858c912e0c797d42d83e6ff3d12abf650a6ed02fe9ffe->enter($__internal_87d3137ea01a378b95d858c912e0c797d42d83e6ff3d12abf650a6ed02fe9ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:index.html.twig"));

        $__internal_20c380c2f0d714ab55d64f86cee8a09ddb9c44b6c008c7078d2bb4c5bad6d031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c380c2f0d714ab55d64f86cee8a09ddb9c44b6c008c7078d2bb4c5bad6d031->enter($__internal_20c380c2f0d714ab55d64f86cee8a09ddb9c44b6c008c7078d2bb4c5bad6d031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:index.html.twig"));

        // line 5
        $context["menu_role"] = true;
        // line 6
        $context["menu_role_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87d3137ea01a378b95d858c912e0c797d42d83e6ff3d12abf650a6ed02fe9ffe->leave($__internal_87d3137ea01a378b95d858c912e0c797d42d83e6ff3d12abf650a6ed02fe9ffe_prof);

        
        $__internal_20c380c2f0d714ab55d64f86cee8a09ddb9c44b6c008c7078d2bb4c5bad6d031->leave($__internal_20c380c2f0d714ab55d64f86cee8a09ddb9c44b6c008c7078d2bb4c5bad6d031_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4f564008cfc45be61acb906a26e0aced454a642c4947723c9f4e386b63dfd6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f564008cfc45be61acb906a26e0aced454a642c4947723c9f4e386b63dfd6f->enter($__internal_d4f564008cfc45be61acb906a26e0aced454a642c4947723c9f4e386b63dfd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67ddec99e5d70503b122265fae5f1eb58e13ca1d2519b80bc19127d2a5cc1d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ddec99e5d70503b122265fae5f1eb58e13ca1d2519b80bc19127d2a5cc1d5b->enter($__internal_67ddec99e5d70503b122265fae5f1eb58e13ca1d2519b80bc19127d2a5cc1d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des carosseries ";
        
        $__internal_67ddec99e5d70503b122265fae5f1eb58e13ca1d2519b80bc19127d2a5cc1d5b->leave($__internal_67ddec99e5d70503b122265fae5f1eb58e13ca1d2519b80bc19127d2a5cc1d5b_prof);

        
        $__internal_d4f564008cfc45be61acb906a26e0aced454a642c4947723c9f4e386b63dfd6f->leave($__internal_d4f564008cfc45be61acb906a26e0aced454a642c4947723c9f4e386b63dfd6f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a7e36cb9243e2dc84e23a91451227c9f43c861c79ce927a9023f8cf411f402d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7e36cb9243e2dc84e23a91451227c9f43c861c79ce927a9023f8cf411f402d->enter($__internal_2a7e36cb9243e2dc84e23a91451227c9f43c861c79ce927a9023f8cf411f402d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_752cb97b2fdfecdfbe6ba35283d74286ba68564c74f81839d9ff76c8718c5110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752cb97b2fdfecdfbe6ba35283d74286ba68564c74f81839d9ff76c8718c5110->enter($__internal_752cb97b2fdfecdfbe6ba35283d74286ba68564c74f81839d9ff76c8718c5110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un rôle
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-role\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th>Nom</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 55
            echo "                                    <tr>

                                        <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "roleName", array()), "html", null, true);
            echo "</td>

                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                            </tbody>
                        </table>

                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_752cb97b2fdfecdfbe6ba35283d74286ba68564c74f81839d9ff76c8718c5110->leave($__internal_752cb97b2fdfecdfbe6ba35283d74286ba68564c74f81839d9ff76c8718c5110_prof);

        
        $__internal_2a7e36cb9243e2dc84e23a91451227c9f43c861c79ce927a9023f8cf411f402d->leave($__internal_2a7e36cb9243e2dc84e23a91451227c9f43c861c79ce927a9023f8cf411f402d_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee043e411f79d1cf3af78308a10eebfcfb7cac4470550f90185b1113936183a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee043e411f79d1cf3af78308a10eebfcfb7cac4470550f90185b1113936183a8->enter($__internal_ee043e411f79d1cf3af78308a10eebfcfb7cac4470550f90185b1113936183a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_657ea0a488edc253d30d534a9225fe648b47c320110e5f0fcc4985b4176a475a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657ea0a488edc253d30d534a9225fe648b47c320110e5f0fcc4985b4176a475a->enter($__internal_657ea0a488edc253d30d534a9225fe648b47c320110e5f0fcc4985b4176a475a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-role').DataTable(
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
                    \"sEmptyTable\": \"Aucun rôle trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_657ea0a488edc253d30d534a9225fe648b47c320110e5f0fcc4985b4176a475a->leave($__internal_657ea0a488edc253d30d534a9225fe648b47c320110e5f0fcc4985b4176a475a_prof);

        
        $__internal_ee043e411f79d1cf3af78308a10eebfcfb7cac4470550f90185b1113936183a8->leave($__internal_ee043e411f79d1cf3af78308a10eebfcfb7cac4470550f90185b1113936183a8_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtRole:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 72,  204 => 71,  186 => 61,  176 => 57,  172 => 55,  168 => 54,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des carosseries {% endblock %}

{% set menu_role      = true %}
{% set menu_role_list = true %}

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
                    <a href=\"{{ path('role_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un rôle
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('role_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-role\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th>Nom</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for role in roles %}
                                    <tr>

                                        <td>{{ role.roleName }}</td>

                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>

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
            \$('#list-role').DataTable(
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
                    \"sEmptyTable\": \"Aucun rôle trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtRole:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtRole/index.html.twig");
    }
}
