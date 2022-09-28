<?php

/* AdminBundle:CtProcesVerbal:add.html.twig */
class __TwigTemplate_183b842cc7a61c4b9d4151028993d5bcd2e9e05cf315576e0561b55799d6d640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtProcesVerbal:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80f73005b1b328966d3ad0a009e3355531153caf28566169e4af4afea87fa59c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f73005b1b328966d3ad0a009e3355531153caf28566169e4af4afea87fa59c->enter($__internal_80f73005b1b328966d3ad0a009e3355531153caf28566169e4af4afea87fa59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProcesVerbal:add.html.twig"));

        $__internal_e5732f20a9d8716a0dd829058572937b2bb5bad81a42a0a407e4cea7c80195e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5732f20a9d8716a0dd829058572937b2bb5bad81a42a0a407e4cea7c80195e6->enter($__internal_e5732f20a9d8716a0dd829058572937b2bb5bad81a42a0a407e4cea7c80195e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProcesVerbal:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_proces_verbal"] = true;
        // line 8
        $context["menu_proces_verbal_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80f73005b1b328966d3ad0a009e3355531153caf28566169e4af4afea87fa59c->leave($__internal_80f73005b1b328966d3ad0a009e3355531153caf28566169e4af4afea87fa59c_prof);

        
        $__internal_e5732f20a9d8716a0dd829058572937b2bb5bad81a42a0a407e4cea7c80195e6->leave($__internal_e5732f20a9d8716a0dd829058572937b2bb5bad81a42a0a407e4cea7c80195e6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_061a5c46ac37018d58f1f1c102f06b0d8506a0fdc17b4949ccaf53c5dfc69bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061a5c46ac37018d58f1f1c102f06b0d8506a0fdc17b4949ccaf53c5dfc69bb6->enter($__internal_061a5c46ac37018d58f1f1c102f06b0d8506a0fdc17b4949ccaf53c5dfc69bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dfd014833a88a817fa89764643fec4ad7981f50422e4fd8082404cafb817d1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd014833a88a817fa89764643fec4ad7981f50422e4fd8082404cafb817d1a0->enter($__internal_dfd014833a88a817fa89764643fec4ad7981f50422e4fd8082404cafb817d1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout proces verbal ";
        
        $__internal_dfd014833a88a817fa89764643fec4ad7981f50422e4fd8082404cafb817d1a0->leave($__internal_dfd014833a88a817fa89764643fec4ad7981f50422e4fd8082404cafb817d1a0_prof);

        
        $__internal_061a5c46ac37018d58f1f1c102f06b0d8506a0fdc17b4949ccaf53c5dfc69bb6->leave($__internal_061a5c46ac37018d58f1f1c102f06b0d8506a0fdc17b4949ccaf53c5dfc69bb6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_994c9a36ecbf8bdfd96ff11703a8baf31a56b41f353a9649309de3ceb90fb5af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994c9a36ecbf8bdfd96ff11703a8baf31a56b41f353a9649309de3ceb90fb5af->enter($__internal_994c9a36ecbf8bdfd96ff11703a8baf31a56b41f353a9649309de3ceb90fb5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2090208dfe18b4c14384f747a8252e9c4d6ffe4854fc152de1f40eedc0dfab4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2090208dfe18b4c14384f747a8252e9c4d6ffe4854fc152de1f40eedc0dfab4b->enter($__internal_2090208dfe18b4c14384f747a8252e9c4d6ffe4854fc152de1f40eedc0dfab4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
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
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un Proces Verbal</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pvType", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pvTarif", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_proces_verbal\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_2090208dfe18b4c14384f747a8252e9c4d6ffe4854fc152de1f40eedc0dfab4b->leave($__internal_2090208dfe18b4c14384f747a8252e9c4d6ffe4854fc152de1f40eedc0dfab4b_prof);

        
        $__internal_994c9a36ecbf8bdfd96ff11703a8baf31a56b41f353a9649309de3ceb90fb5af->leave($__internal_994c9a36ecbf8bdfd96ff11703a8baf31a56b41f353a9649309de3ceb90fb5af_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtProcesVerbal:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout proces verbal {% endblock %}

{% set menu_proces_verbal           = true %}
{% set menu_proces_verbal_create    = true %}

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
    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un Proces Verbal</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.pvType) }}
                        {{ form_row(form.pvTarif) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_proces_verbal\"/>
                        <a href=\"{{ path('proces_verbal_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtProcesVerbal:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtProcesVerbal/add.html.twig");
    }
}
